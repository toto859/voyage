<?php
App::uses('AppController', 'Controller');
/**
 * UsersInformations Controller
 *
 * @property UsersInformation $UsersInformation
 * @property PaginatorComponent $Paginator
 */
class UsersInformationsController extends AppController {

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
		$this->UsersInformation->recursive = 0;
		$this->set('usersInformations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsersInformation->exists($id)) {
			throw new NotFoundException(__('Invalid users information'));
		}
		$options = array('conditions' => array('UsersInformation.' . $this->UsersInformation->primaryKey => $id));
		$this->set('usersInformation', $this->UsersInformation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersInformation->create();
			if ($this->UsersInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The users information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users information could not be saved. Please, try again.'));
			}
		}
		$pays = $this->UsersInformation->Pays->find('list', array(
        'fields' => array('id', 'pays')));
		$programmes = $this->UsersInformation->Programme->find('list', array(
        'fields' => array('id', 'programme')));
		$voyages = $this->UsersInformation->Voyage->find('list', array(
        'fields' => array('id', 'voyage')));
		$this->set(compact('pays', 'programmes', 'voyages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UsersInformation->exists($id)) {
			throw new NotFoundException(__('Invalid users information'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsersInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The users information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users information could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersInformation.' . $this->UsersInformation->primaryKey => $id));
			$this->request->data = $this->UsersInformation->find('first', $options);
		}
		$pays = $this->UsersInformation->Pays->find('list', array(
        'fields' => array('id', 'pays')));
		$programmes = $this->UsersInformation->Programme->find('list', array(
        'fields' => array('id', 'programme')));
		$voyages = $this->UsersInformation->Voyage->find('list', array(
        'fields' => array('id', 'voyage')));
		$this->set(compact('pays', 'programmes', 'voyages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UsersInformation->id = $id;
		if (!$this->UsersInformation->exists()) {
			throw new NotFoundException(__('Invalid users information'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsersInformation->delete()) {
			$this->Session->setFlash(__('The users information has been deleted.'));
		} else {
			$this->Session->setFlash(__('The users information could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UsersInformation->recursive = 0;
		$this->set('usersInformations', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UsersInformation->exists($id)) {
			throw new NotFoundException(__('Invalid users information'));
		}
		$options = array('conditions' => array('UsersInformation.' . $this->UsersInformation->primaryKey => $id));
		$this->set('usersInformation', $this->UsersInformation->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UsersInformation->create();
			if ($this->UsersInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The users information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users information could not be saved. Please, try again.'));
			}
		}
		$pays = $this->UsersInformation->Pay->find('list');
		$programmes = $this->UsersInformation->Programme->find('list');
		$voyages = $this->UsersInformation->Voyage->find('list');
		$this->set(compact('pays', 'programmes', 'voyages'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->UsersInformation->exists($id)) {
			throw new NotFoundException(__('Invalid users information'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsersInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The users information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users information could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersInformation.' . $this->UsersInformation->primaryKey => $id));
			$this->request->data = $this->UsersInformation->find('first', $options);
		}
		$pays = $this->UsersInformation->Pay->find('list');
		$programmes = $this->UsersInformation->Programme->find('list');
		$voyages = $this->UsersInformation->Voyage->find('list');
		$this->set(compact('pays', 'programmes', 'voyages'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->UsersInformation->id = $id;
		if (!$this->UsersInformation->exists()) {
			throw new NotFoundException(__('Invalid users information'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsersInformation->delete()) {
			$this->Session->setFlash(__('The users information has been deleted.'));
		} else {
			$this->Session->setFlash(__('The users information could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
