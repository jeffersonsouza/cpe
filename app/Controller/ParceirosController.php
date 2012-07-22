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
	public function admin_dados($id = null) {
		$this->Parceiro->id = $id;
		$this->Parceiro->recursive = -1;
		if (!$this->Parceiro->exists()) {
			throw new NotFoundException(__('Parceiro Inexistente'));
		}
		$dados = $this->Parceiro->read(null, $id);
		$dados = <<<JSON
			{
				"id" : "{$dados['Parceiro']['id']}",
				"nome" : "{$dados['Parceiro']['nome']}",
				"telefone" : "{$dados['Parceiro']['telefone']}",
				"email" : "{$dados['Parceiro']['email']}",
				"contato" : "{$dados['Parceiro']['contato']}",
				"site" : "{$dados['Parceiro']['site']}",
				"razao_social" : "{$dados['Parceiro']['razao_social']}"
			}
JSON;
		$this->autoRender = false;
		echo header('Content-type: application/json');
		die($dados);
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_salvar() {
		if ($this->request->is('ajax')) {
			if(empty($this->request->data['Parceiro']['id'])){
				$token = time();
				$xml = Xml::build("http://migre.me/api.xml?url=" . Router::url("/", true) . '?partner=' . $token);
	
				$this->request->data['Parceiro']['url'] = $xml->migre;
				$this->request->data['Parceiro']['token'] = $token;
			}
			
			$this->Parceiro->create();
			$json = '{';
			if ($this->Parceiro->save($this->request->data)) {
				if(empty($this->request->data['Parceiro']['id'])){
					App::uses('CakeTime', 'Utility');
					
					$now = date('d-m-Y H:i');
					$row = <<<ROW
<tr id="{$this->Parceiro->id}"><td>#{$this->Parceiro->id} </td><td> {$this->request->data['Parceiro']['nome']} </td><td><a target="_blank" href="{$this->request->data['Parceiro']['url']}">{$this->request->data['Parceiro']['url']}</a></td><td>{$now}</td><td><a href="javascript:void(0);" class="tooltips adicionar-premio" title="Definir prêmio para clientes"><i class="icon-gift"></i></a> <a href="javascript:void(0);" class="tooltips editar-parceiro" title="Editar este parceiro"><i class="icon-edit"></i></a> <a href="javascript:void(0);" class="tooltips remover-parceiro" title="Remover este parceiro"><i class="icon-remove-sign"></i></a></td></tr>
ROW;
					$this->set('retorno', $row);
					$json .= '"tipo" : "create",';
					$json .= '"append" : "' . addslashes($row) . '",';
				} else {
					$json .= '"tipo" : "update",';
				}
				$json .= '"response" : "true"';
			} else {
				$this->set('retorno', 'false');
				$json .= '"response" : "false"';
			}
			$json .= '}';
		}
		$this->autoRender = false;
		echo header('Content-type: application/json');
		die($json);
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Parceiro->id = $id;
		if (!$this->Parceiro->exists()) {
			throw new NotFoundException(__('Parceiro Invalido'));
		}
		$retorno = '{';
		if ($this->Parceiro->delete()) {
			$retorno .= '"response" : "true"';
		} else {
			$retorno .= '"response" : "false"';
		}
		$retorno .= '}';
		
		$this->autoRender = false;
		echo header('Content-type: application/json');
		die($retorno);
	}
}
