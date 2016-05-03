<?php

class CountriesController extends AppController{
	public $uses = array('Country', 'Category');
	public function admin_index(){
		$data = $this->Country->find('all', array(
			'order' => array('Country.id' => 'desc')
		));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Country->create();
			$data = $this->request->data['Country'];
			
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			
			if($this->Country->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}
	
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Country->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Country->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Country->id = $id;
			$data1 = $this->request->data['Country'];
			
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			
			if($this->Country->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data'));
		}
	}

	public function admin_delete($id){
		if (!$this->Country->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Country->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		
		$title_for_layout = 'Страны';
		$data = $this->Country->find('all', array(
			'order' => array('id' => 'desc')
			));
		$this->set(compact('data', 'title_for_layout'));
	}


	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Country->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Country->findById($id);
		
		$title_for_layout = $data['Country']['title'];
		$this->set(compact('data', 'title_for_layout'));
	}

	public function category($category_id){
		$data = $this->Country->find('all', array(
			'conditions' => array('category_id' => $category_id)
			));
		$this->set(compact('data'));
	}

	public function search(){
		$search = !empty($_GET['q']) ? $_GET['q'] : null ;
		if( is_null($search)){
			return $this->set('search_res', 'Введите поисковый запрос');
		}
		$search_res = $this->Country->find('all', array(
			'conditions' => array('title LIKE' => '%'.$search.'%')
			));
		$title_for_layout = 'Поиск';
		$this->set(compact('search_res', 'title_for_layout'));
		
	}
}