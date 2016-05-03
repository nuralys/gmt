<?php

class NewsController extends AppController{
	public $components = array('Paginator');

	public function admin_index(){
		$data = $this->News->find('all', array(
			'order' => array('date' => 'desc')
		));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->News->create();
			$data = $this->request->data['News'];
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->News->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->News->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->News->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->News->id = $id;
			$data1 = $this->request->data['News'];
			if(empty($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->News->save($data1)){
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
		if (!$this->News->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->News->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		
		$title_for_layout = 'News';
		$this->Paginator->settings = array(
				'fields' => array('id', 'title', 'body', 'date', 'img'),
				'recursive' => -1,
				'limit' => 10,
				'order' => array('date' => 'desc')
				);
		$news = $this->Paginator->paginate('News');
		// debug($news);
		$this->set(compact('news', 'title_for_layout'));
	}


	public function view($id){
		if(is_null($id) || !(int)$id || !$this->News->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$post = $this->News->findById($id);
		$news = $this->News->find('all', array(
			'fields' => array('id', 'title')
			));

		$this->set(compact('post', 'news'));
	}

	public function search(){
		$search = !empty($_GET['search']) ? $_GET['search'] : null ;
		if( is_null($search)){
			return $this->set('search_res', 'Enter your search query');
		}
		$this->Paginator->settings = array(
			'conditions' => array('News.title LIKE' => '%' . $search . '%'),
			'fields' => array('id', 'title', 'body', 'date', 'img'),
			'recursive' => -1,
			'limit' => 10,
			'order' => array('date' => 'desc')
			);
		$search_res = $this->Paginator->paginate('News');
		$this->set(compact('search_res'));
	}
}