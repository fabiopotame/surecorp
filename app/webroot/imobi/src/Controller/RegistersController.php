<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Registers Controller
 *
 * @property \App\Model\Table\RegistersTable $Registers
 */
class RegistersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('index');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $register = $this->Registers->newEntity();
        $this->title_for_layout = 'Registrar nova conta';
        $this->viewBuilder()->layout('default_login');
        $this->request->session()->delete('Registers.code');

        if($this->request->is('post')) {
            $register = $this->Registers->newEntity($this->request->data);
            $registerValidation = $this->Registers->find('all', ['contain' => ['Users']])
                ->where(['Registers.code' => $this->request->data['code'], 'Registers.status' => 1, 'Registers.validate >=' => date('Y-m-d')])
                ->first();
            if(!empty($registerValidation->id) && empty($registerValidation->users)) {
                $this->request->session()->write('Registers.code', $this->request->data['code']);
                $this->Flash->success(__('Número serial autorizado com sucesso.'));
                $this->redirect(['controller' => 'users', 'action' => 'register']);
            } else {
                 $this->Flash->error(__('Número serial inválido, tente novamente.'));
            }
        }
        $this->set(compact('register'));
    }

    /**
     * View method
     *
     * @param string|null $id Register id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $register = $this->Registers->get($id, [
            'contain' => ['Offices', 'Users']
        ]);

        $this->set('register', $register);
        $this->set('_serialize', ['register']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $register = $this->Registers->newEntity();
        if ($this->request->is('post')) {
            $register = $this->Registers->patchEntity($register, $this->request->data);
            if ($this->Registers->save($register)) {
                $this->Flash->success(__('The register has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The register could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('register'));
        $this->set('_serialize', ['register']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Register id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $register = $this->Registers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $register = $this->Registers->patchEntity($register, $this->request->data);
            if ($this->Registers->save($register)) {
                $this->Flash->success(__('The register has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The register could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('register'));
        $this->set('_serialize', ['register']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Register id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $register = $this->Registers->get($id);
        if ($this->Registers->delete($register)) {
            $this->Flash->success(__('The register has been deleted.'));
        } else {
            $this->Flash->error(__('The register could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
