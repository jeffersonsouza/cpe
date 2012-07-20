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
	public function admin_index() {
		$this->layout = 'admin';
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
	public function admin_salvar() {
		if ($this->request->is('ajax')) {
			$token = time();
			$xml = Xml::build("http://migre.me/api.xml?url=" . Router::url("/", true) . '?partner=' . $token);

			$this->request->data['Parceiro']['url'] = $xml->migre;
			$this->request->data['Parceiro']['token'] = $xml->id;
			$this->Parceiro->create();
			if ($this->Parceiro->save($this->request->data)) {
				App::uses('CakeTime', 'Utility');
				$row = '<tr>';
				$row .= '<td>#' . $this->Parceiro->id . '</td>';
				$row .= '<td>' . $this->request->data['Parceiro']['nome'] . '</td>';
				$row .= '<td><a target="_blank" href="' . $this->request->data['Parceiro']['url'] . '">' . $this->request->data['Parceiro']['url'] . '</a></td>';
				$row .= '<td>' . date('d-m-Y H:i') . '</td>';
				$row .= '</tr>';
				$this->set('retorno', $row);
				echo $row;
			} else {
				$this->set('retorno', 'false');
				echo 'false';
			}
		}
		$this->autoRender = false;
		$this->layout = 'ajax';
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
