<?php

class ClinicsController extends AppController{
	public $uses = array('Clinic', 'Country');
	public $components = array('Paginator');

	public function admin_index(){
		$data = $this->Clinic->find('list');
		
		$this->set(compact('data'));
	}

	public function index(){
		$data = $this->Clinic->find('all');
		
		return $this->set(compact('data'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Clinic->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Clinic->findById($id);
		

		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			debug($this->request->data);
			$this->Clinic->create();
			$data = $this->request->data['Clinic'];
			if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->Clinic->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$c_list = $this->Country->find('list');
		return $this->set(compact('c_list'));

	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Clinic->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Clinic->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Clinic->id = $id;
			$data1 = $this->request->data['Clinic'];
			
			
			if($this->Clinic->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$c_list = $this->Clinic->find('list');
			$this->set(compact('id', 'data', 'c_list'));
		}
	}

	public function admin_delete($id){
		if (!$this->Clinic->exists($id)) {
			throw new NotFounddException('Такой категории нету');
		}
		if($this->Clinic->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}