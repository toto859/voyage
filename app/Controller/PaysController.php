<?php
App::uses('AppController', 'Controller');
/**
 * Pays Controller
 *
 * @property Pay $Pay
 * @property PaginatorComponent $Paginator
 */
class PaysController extends AppController {


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
}
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pay->recursive = 0;
		$this->set('pays', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pay->exists($id)) {
			throw new NotFoundException(__('Invalid pay'));
		}
		$options = array('conditions' => array('Pay.' . $this->Pay->primaryKey => $id));
		$this->set('pay', $this->Pay->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pay->create();
			if ($this->Pay->save($this->request->data)) {
				$this->Session->setFlash(__('The pay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pay could not be saved. Please, try again.'));
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
		if (!$this->Pay->exists($id)) {
			throw new NotFoundException(__('Invalid pay'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pay->save($this->request->data)) {
				$this->Session->setFlash(__('The pay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pay could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pay.' . $this->Pay->primaryKey => $id));
			$this->request->data = $this->Pay->find('first', $options);
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
		$this->Pay->id = $id;
		if (!$this->Pay->exists()) {
			throw new NotFoundException(__('Invalid pay'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pay->delete()) {
			$this->Session->setFlash(__('The pay has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pay could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Pay->recursive = 0;
		$this->set('pays', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Pay->exists($id)) {
			throw new NotFoundException(__('Invalid pay'));
		}
		$options = array('conditions' => array('Pay.' . $this->Pay->primaryKey => $id));
		$this->set('pay', $this->Pay->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Pay->create();
			if ($this->Pay->save($this->request->data)) {
				$this->Session->setFlash(__('The pay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pay could not be saved. Please, try again.'));
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
		if (!$this->Pay->exists($id)) {
			throw new NotFoundException(__('Invalid pay'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pay->save($this->request->data)) {
				$this->Session->setFlash(__('The pay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pay could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pay.' . $this->Pay->primaryKey => $id));
			$this->request->data = $this->Pay->find('first', $options);
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
		$this->Pay->id = $id;
		if (!$this->Pay->exists()) {
			throw new NotFoundException(__('Invalid pay'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pay->delete()) {
			$this->Session->setFlash(__('The pay has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pay could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
