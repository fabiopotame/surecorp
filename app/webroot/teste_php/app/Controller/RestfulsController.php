<?php
App::uses('Controller', 'Controller');

class RestfulsController extends AppController {

	public $token = 'aj4ud62jruc8nd73nfu348dn3'; // código que valida a autenticação ao webservice, este codigo será gerado a cada sessão de login criada, caso não coincida com o token de origem mata a operação na mesma hora e retorna um erro.

	public function index()
	{
		// monta a url com os parâmetros;
		$params = $this->Restful->getParams($this->request->query, $this->token);

		// disponibiza os dados digitados para o form
		$this->request->data = $this->Restful->sendDataForm($this->request->query);

		// faz a requisição com o webservice para trazer os dados
		$users = $this->Restful->getData('users' . DS . 'list?' . $params);

		// caso haja erro de autenticação executa o metodo errorValidation
		if(isset($users->return) && $users->return = 'error_token') {
			$this->errorValidation();
			$users = array(); // limpa a variavel
		} 

		$this->set(compact('users')); // disponibiliza os dados para a view
	}	

	public function add()
	{	
		// se for uma chamada get execute
		if(!empty($this->request->query)) {

			// se existir parametros, filtre-os
			$params = $this->Restful->getParams($this->request->query, $this->token);

			// faz a requisição com o webservice e envia os dados via get, e recebe o retorno do processo
			$user = $this->Restful->getData('users' . DS . 'alter?' . $params);

			// caso haja erro de autenticação executa o metodo errorValidation
			if($user->return == 'error_token') {
				$this->errorValidation(true);
			} else {

				// se retornar sucesso
				if($user->return == 'success') {
					$this->Session->setFlash(NULL, 'success');
					return $this->redirect(array('action' => 'index'));
				} else {
					// se retornar com um erro
					$this->Session->setFlash(NULL, 'danger');
				}
				// disponibiza os dados digitados para o form
				$this->request->data = $this->Restful->sendDataForm($this->request->query);
			}
		}
		$this->set('provinces', $this->Restful->provinces);
	}

	public function edit($id = null)
	{
		// se for uma chamada get execute
		if(!empty($this->request->query)) {

			// se existir parametros, filtre-os
			$params = $this->Restful->getParams($this->request->query, $this->token);

			// faz a requisição com o webservice e envia os dados via get, e recebe o retorno do processo
			$user = $this->Restful->getData('users' . DS . 'alter?' . $params);

			// caso haja erro de autenticação executa o metodo errorValidation
			if($user->return == 'error_token') {
				$this->errorValidation(true);
			} else {

				// se retornar sucesso
				if($user->return == 'success') {
					$this->Session->setFlash(NULL, 'success');
					return $this->redirect(array('action' => 'index'));
				} else {
					// se retornar com um erro
					$this->Session->setFlash(NULL, 'danger');
				}
				// disponibiza os dados digitados para o form
				$this->request->data = $this->Restful->sendDataForm($this->request->query);
			}
		} else {

			// faz a requisição com o webservice, lista o usuário selecionado, trás seus dados e preenche o form
			$user = $this->Restful->getData('users' . DS . 'list?token='.$this->token.'&id='.$id);

			// caso haja erro de autenticação executa o metodo errorValidation
			if(!empty($user->return) && $user->return == 'error_token') {
				$this->errorValidation(true);
			} else {

				// disponibiza os dados recebidos para o form
				$this->request->data = $this->Restful->sendDataForm((array)$user[0]->User);
			}
		}
		$this->set('provinces', $this->Restful->provinces);
	}

	public function delete($id = null)
	{
		// faz a requisição com o webservice e envia o id do usuario a ser excluido
		$return = $this->Restful->getData('users' . DS . 'delete?token='.$this->token.'&id='.$id);

		// caso haja erro de autenticação executa o metodo errorValidation
		if($return->return == 'error_token') {
			$this->errorValidation(true);
		} else { 
			if($return->return == 'success') {
				// se retornar sucesso
				$this->Session->setFlash(NULL, 'delete');
			} else {
				// se retornaR erro
				$this->Session->setFlash(NULL, 'danger');
			}
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function errorValidation($redirect = false)
	{
		$this->Session->setFlash(NULL, 'error_token');
		if($redirect) return $this->redirect(array('action' => 'index'));
	}

}

