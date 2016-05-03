<?php

class SpecializationsController extends AppController{

	public function index(){
		$s_tree = $this->Specialization->find('threaded');

		$specializations = $this->_catMenuHtml($s_tree);
		$this->set(compact('specializations', 's_tree'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Specialization->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Specialization->findById($id);

		$this->set(compact('data'));
	}

	protected function _catMenuHtml($s_tree = false){
		if(!$s_tree) return false;
		$html = '';
		foreach ($s_tree as $item) {
			$html .= $this->_catMenuTemplate($item);
		}
		return $html;
	}

	protected function _catMenuTemplate($specializations){
		ob_start();
		include APP . "View/Elements/specializations_tpl.ctp";
		return ob_get_clean();
	}

	public function admin_index(){
		$data = $this->Specialization->find('all');
		$title_for_layout = 'Специализации';
		// debug($data);
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Specialization->create();
			$data = $this->request->data['Specialization'];
			// debug($this->request->data);
			// debug($data);

			if($this->Specialization->save($data)){
				$this->Session->setFlash('Saved', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Error', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Add new Specialization';
		$s_list = $this->Specialization->find('list');
		$this->set(compact('title_for_layout', 's_list'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Specialization->exists($id)){
			throw new NotFoundException('Not found...');
		}
		$data = $this->Specialization->findById($id);
		if(!$id){
			throw new NotFoundException('Not found...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Specialization->id = $id;
			$data1 = $this->request->data['Specialization'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Specialization->save($data1)){
				$this->Session->setFlash('Saved', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Error', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Editing material';
			$this->set(compact('id', 'data', 'title_for_layout'));
		}
	}

	public function admin_delete($id){
		if (!$this->Specialization->exists($id)) {
			throw new NotFounddException('This material is not');
		}
		if($this->Specialization->delete($id)){
			$this->Session->setFlash('Deleted', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Error', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}
}