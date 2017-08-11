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
    public function index($customer_type_id)
    {

        $this->paginate = [
        'contain' => ['Registers', 'CustomerTypes'],
        'conditions' => ['Customers.customer_type_id' => $customer_type_id]
        ];
        $customers = $this->paginate($this->Customers);

        $pageTitle = $this->Customers->CustomerTypes->get($customer_type_id);

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
            'contain' => ['Registers', 'CustomerTypes']
            ]);

        $this->set('customer', $customer);
        $this->set('_serialize', ['customer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($customer_type_id)
    {
        $customer = $this->Customers->newEntity();
        if ($this->request->is('post')) {
            $customer = $this->Customers->patchEntity($customer, $this->request->data);
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('Cliente salvo com sucesso.'));

                return $this->redirect(['action' => 'index', $customer_type_id]);
            } else {
                $this->Flash->error(__('O cliente não pode ser salvo, por favor tente novamente.'));
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
        }

        $registers = $this->Customers->Registers->find('list', ['limit' => 200]);
        $customerTypes = $this->Customers->CustomerTypes->find('list', ['limit' => 200]);
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
    public function edit($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => []
            ]);

        $companyName = false;
        switch ($customer->customer_type_id) {
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
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer, $this->request->data);
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('Alteração realizada com sucesso.'));

                return $this->redirect(['action' => 'index', $customer->customer_type_id]);
            } else {
                $this->Flash->error(__('A alteração não foi salva, por favor tente novamente.'));
            }
        }
        $registers = $this->Customers->Registers->find('list', ['limit' => 200]);
        $customerTypes = $this->Customers->CustomerTypes->find('list', ['limit' => 200]);
        $this->set(compact('customer', 'registers', 'customerTypes', 'companyName', 'cpfCnpj', 'title'));
        $this->set('customer_type_id', $customer->customer_type_id);
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
