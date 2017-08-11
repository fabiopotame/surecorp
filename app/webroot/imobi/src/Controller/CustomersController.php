<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Customers Controller
 *
 * @property \App\Model\Table\CustomersTable $Customers
 */
class CustomersController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index($customer_type_id = null)
	{
		$conditions = [];
		switch ($customer_type_id) {
			case '1':
			$this->title_for_layout = 'Proprietários';
			$pageTitle = 'Proprietários';
			$conditions['Customers.is_owner'] = 1;
			break;

			case '2':
			$this->title_for_layout = 'Inquilinos';
			$pageTitle = 'Inquilinos';
			$conditions['Customers.is_renter'] = 1;
			break;

			default:
			$this->title_for_layout = 'Clientes';
			$pageTitle = 'Clientes';
			break;
		}
		$this->paginate = [
		'contain' => ['Registers'],
		'conditions' => $conditions
		];
		$customers = $this->paginate($this->Customers);
		$this->set(compact('customers', 'pageTitle', 'customer_type_id'));
		$this->set('_serialize', ['customers']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Customer id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$customer = $this->Customers->get($id, [
			'contain' => ['Registers', 'Addresses']
			]);

		$this->set('customer', $customer);
		$this->set('_serialize', ['customer']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
	 */
	public function add($customer_type_id = null)
	{
		$customer = $this->Customers->newEntity();
		if ($this->request->is('post')) {
			$customer = $this->Customers->patchEntity($customer, $this->request->data);
			if ($this->Customers->save($customer)) {
				$this->Flash->success(__('Cliente salvo com sucesso.'));

				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('O cliente não pode ser salvo, por favor tente novamente.'));
			}
		}
		$companyName = false;
		$cpfCnpj = 'CPF';

		$registers = $this->Customers->Registers->find('list', ['limit' => 200]);
		//$customerTypes = $this->Customers->CustomerTypes->find('list', ['limit' => 200]);
		$this->set(compact('customer', 'registers', 'customerTypes', 'customer_type_id', 'companyName', 'cpfCnpj', 'title'));
		$this->set('_serialize', ['customer']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Customer id.
	 * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null, $customer_type_id = null)
	{
		$customer = $this->Customers->get($id, [
			'contain' => ['Addresses']
			]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$customer = $this->Customers->patchEntity($customer, $this->request->data);
			if ($this->Customers->save($customer)) {
				$this->Flash->success(__('Alteração realizada com sucesso.'));

				return $this->redirect(['action' => 'index', $customer->customer_type_id]);
			} else {
				$this->Flash->error(__('The customer could not be saved. Please, try again.'));
			}
		}
		$companyName = false;
		switch ($customer_type_id) {
			case '1':
			$companyName = false;
			$cpfCnpj = 'CPF';
			$title = 'Proprietário';
			break;
			
			case '2':
			$companyName = false;
			$cpfCnpj = 'CPF';
			$title = 'Inquilino';
			break;

			default:
			$companyName = false;
			$cpfCnpj = 'CPF';
			$title = '';
			break;
		}
		$registers = $this->Customers->Registers->find('list', ['limit' => 200]);
		//$customerTypes = $this->Customers->CustomerTypes->find('list', ['limit' => 200]);
		$addresses = $this->Customers->Addresses->find('list', ['limit' => 200]);
		$this->set(compact('customer', 'registers', 'customerTypes', 'addresses', 'title', 'customer_type_id', 'companyName', 'cpfCnpj'));
		$this->set('_serialize', ['customer']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Customer id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$customer = $this->Customers->get($id);
		if ($this->Customers->delete($customer)) {
			$this->Flash->success(__('The customer has been deleted.'));
		} else {
			$this->Flash->error(__('The customer could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
