<?php
App::uses('Controller', 'Controller');

class UsersController extends AppController {

	public $token = 'aj4ud62jruc8nd73nfu348dn3'; // código que valida a autenticação ao webservice, este codigo será gerado a cada sessão de login criada, caso não coincida com o token recebido mata a operação na mesma hora e retorna um erro.

	/*
	ESTE CONTROLLER EXECUTA OS METODS DE GETTERS E SETTERS DO FORMULARIO DE USUARIOS
	*/

	public function list()
	{
		$this->autoRender = false;

		// se ouver falha no token retorna um erro
		if($this->request->query['token'] != $this->token) {
			return json_encode(array('return' => 'error_token'));
		}

		// insere as condições da busca
		$conditions = array();
		if(!empty($this->request->query['id'])) {
			$conditions['User.id'] = $this->request->query['id'];
		}

		$users = $this->User->find('all', array('conditions' => $conditions));
		echo json_encode($users);
	}	

	public function alter()
	{
		$this->autoRender = false;

		// se ouver falha no token retorna um erro
		if(empty($this->request->query['token']) || $this->request->query['token'] != $this->token) {
			return json_encode(array('return' => 'error_token'));
		}

		if(!empty($this->request->query)) {

			// monta o array para salvar
			foreach ($this->request->query as $key => $value) {
				$data['User'][$key] = urldecode($value); // decodifica os dados
			}

			// salva os dados
			if($this->User->save($data)) {
				$return = array('return' => 'success');
			} else {
				// se ouver um erro no salvamento
				$return = array('return' => 'error');
			}
		} else {
			$return = array('return' => 'error');
		}

		return json_encode($return);
	}

	public function delete()
	{
		$this->autoRender = false;

		//se ouver uma falha no token retorna um erro
		if($this->request->query['token'] != $this->token) {
			return json_encode(array('return' => 'error_token'));
		}

		// exclui o registro
		if($this->User->delete($this->request->query['id'])) {
			$return = array('return' => 'success'); 
		} else {
			$return = array('return' => 'error');
		}

		return json_encode($return);
	}

}
