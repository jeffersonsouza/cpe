<?php
App::uses('AppController', 'Controller');
/**
 * Premios Controller
 *
 * @property Premio $Premio
 */
class PremiosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Premio->recursive = 0;
		$this->set('premios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Premio->id = $id;
		if (!$this->Premio->exists()) {
			throw new NotFoundException(__('Invalid premio'));
		}
		$this->set('premio', $this->Premio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Premio->create();
			if ($this->Premio->save($this->request->data)) {
				$this->Session->setFlash(__('The premio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The premio could not be saved. Please, try again.'));
			}
		}
		$parceiros = $this->Premio->Parceiro->find('list');
		$usuarios = $this->Premio->Usuario->find('list');
		$clientes = $this->Premio->Cliente->find('list');
		$this->set(compact('parceiros', 'usuarios', 'clientes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Premio->id = $id;
		if (!$this->Premio->exists()) {
			throw new NotFoundException(__('Invalid premio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Premio->save($this->request->data)) {
				$this->Session->setFlash(__('The premio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The premio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Premio->read(null, $id);
		}
		$parceiros = $this->Premio->Parceiro->find('list');
		$usuarios = $this->Premio->Usuario->find('list');
		$clientes = $this->Premio->Cliente->find('list');
		$this->set(compact('parceiros', 'usuarios', 'clientes'));
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
		$this->Premio->id = $id;
		if (!$this->Premio->exists()) {
			throw new NotFoundException(__('Invalid premio'));
		}
		if ($this->Premio->delete()) {
			$this->Session->setFlash(__('Premio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Premio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
