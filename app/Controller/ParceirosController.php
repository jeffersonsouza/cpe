<?php
App::uses('AppController', 'Controller');
/**
 * Parceiros Controller
 *
 * @property Parceiro $Parceiro
 */
class ParceirosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Parceiro->recursive = 0;
		$this->set('parceiros', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Parceiro->id = $id;
		if (!$this->Parceiro->exists()) {
			throw new NotFoundException(__('Invalid parceiro'));
		}
		$this->set('parceiro', $this->Parceiro->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parceiro->create();
			if ($this->Parceiro->save($this->request->data)) {
				$this->Session->setFlash(__('The parceiro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parceiro could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Parceiro->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Parceiro->id = $id;
		if (!$this->Parceiro->exists()) {
			throw new NotFoundException(__('Invalid parceiro'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Parceiro->save($this->request->data)) {
				$this->Session->setFlash(__('The parceiro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parceiro could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Parceiro->read(null, $id);
		}
		$usuarios = $this->Parceiro->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Parceiro->id = $id;
		if (!$this->Parceiro->exists()) {
			throw new NotFoundException(__('Invalid parceiro'));
		}
		if ($this->Parceiro->delete()) {
			$this->Session->setFlash(__('Parceiro deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Parceiro was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
