<?php
App::uses('AppController', 'Controller');
/**
 * ClientesPremios Controller
 *
 * @property ClientesPremio $ClientesPremio
 */
class ClientesPremiosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientesPremio->recursive = 0;
		$this->set('clientesPremios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientesPremio->id = $id;
		if (!$this->ClientesPremio->exists()) {
			throw new NotFoundException(__('Invalid clientes premio'));
		}
		$this->set('clientesPremio', $this->ClientesPremio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientesPremio->create();
			if ($this->ClientesPremio->save($this->request->data)) {
				$this->Session->setFlash(__('The clientes premio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientes premio could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->ClientesPremio->Cliente->find('list');
		$premios = $this->ClientesPremio->Premio->find('list');
		$this->set(compact('clientes', 'premios'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ClientesPremio->id = $id;
		if (!$this->ClientesPremio->exists()) {
			throw new NotFoundException(__('Invalid clientes premio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientesPremio->save($this->request->data)) {
				$this->Session->setFlash(__('The clientes premio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientes premio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ClientesPremio->read(null, $id);
		}
		$clientes = $this->ClientesPremio->Cliente->find('list');
		$premios = $this->ClientesPremio->Premio->find('list');
		$this->set(compact('clientes', 'premios'));
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
		$this->ClientesPremio->id = $id;
		if (!$this->ClientesPremio->exists()) {
			throw new NotFoundException(__('Invalid clientes premio'));
		}
		if ($this->ClientesPremio->delete()) {
			$this->Session->setFlash(__('Clientes premio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clientes premio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
