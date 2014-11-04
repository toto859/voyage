<?php
App::uses('AppController', 'Controller');
/**
 * Voyages Controller
 *
 * @property Voyage $Voyage
 * @property PaginatorComponent $Paginator
 */
class VoyagesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('add', 'logout');
}

public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }
	
	 return parent::isAuthorized($user);
	 
	 }

public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login($this->request->data)) {
            return $this->redirect($this->Auth->redirect());
        }
        $this->Session->setFlash(__('Invalid username or password, try again'));
    }
}

public function logout() {
    return $this->redirect($this->Auth->logout());
}/*
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Voyage->recursive = 0;
		$this->set('voyages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Voyage->exists($id)) {
			throw new NotFoundException(__('Invalid voyage'));
		}
		$options = array('conditions' => array('Voyage.' . $this->Voyage->primaryKey => $id));
		$this->set('voyage', $this->Voyage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Voyage->create();
			if ($this->Voyage->save($this->request->data)) {
				$this->Session->setFlash(__('The voyage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voyage could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Voyage->exists($id)) {
			throw new NotFoundException(__('Invalid voyage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Voyage->save($this->request->data)) {
				$this->Session->setFlash(__('The voyage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voyage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Voyage.' . $this->Voyage->primaryKey => $id));
			$this->request->data = $this->Voyage->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Voyage->id = $id;
		if (!$this->Voyage->exists()) {
			throw new NotFoundException(__('Invalid voyage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Voyage->delete()) {
			$this->Session->setFlash(__('The voyage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The voyage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Voyage->recursive = 0;
		$this->set('voyages', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Voyage->exists($id)) {
			throw new NotFoundException(__('Invalid voyage'));
		}
		$options = array('conditions' => array('Voyage.' . $this->Voyage->primaryKey => $id));
		$this->set('voyage', $this->Voyage->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Voyage->create();
			if ($this->Voyage->save($this->request->data)) {
				$this->Session->setFlash(__('The voyage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voyage could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Voyage->exists($id)) {
			throw new NotFoundException(__('Invalid voyage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Voyage->save($this->request->data)) {
				$this->Session->setFlash(__('The voyage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voyage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Voyage.' . $this->Voyage->primaryKey => $id));
			$this->request->data = $this->Voyage->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Voyage->id = $id;
		if (!$this->Voyage->exists()) {
			throw new NotFoundException(__('Invalid voyage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Voyage->delete()) {
			$this->Session->setFlash(__('The voyage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The voyage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
