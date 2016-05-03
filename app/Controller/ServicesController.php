<?php

class ServicesController extends AppController{

	public $uses = array('Service');

	public function index(){
		
		$data = $this->Service->find('all');
		$title_for_layout = 'Services';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Service->exists($id)){
			throw new NotFoundException('Not found...');
		}
		$data = $this->Service->findById($id);
		$title_for_layout = 'Service';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$data = $this->Service->find('all');
		$title_for_layout = 'Service';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Service->create();
			$data = $this->request->data['Service'];
			// debug($this->request->data);
			// debug($data);

			if($this->Service->save($data)){
				$this->Session->setFlash('Saved', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Error', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Add new Service';
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Service->exists($id)){
			throw new NotFoundException('Not found...');
		}
		$data = $this->Service->findById($id);
		if(!$id){
			throw new NotFoundException('Not found...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Service->id = $id;
			$data1 = $this->request->data['Service'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Service->save($data1)){
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
		if (!$this->Service->exists($id)) {
			throw new NotFounddException('This material is not');
		}
		if($this->Service->delete($id)){
			$this->Session->setFlash('Deleted', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Error', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}
}