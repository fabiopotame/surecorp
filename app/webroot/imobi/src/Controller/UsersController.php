<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('register');
    }


    public function login()
    {
        $user = $this->Users->newEntity();
        $this->title_for_layout = 'Login';
        if($this->Auth->user()) {
            return $this->redirect(['controller' => 'pages', 'action' => 'display']);
        }
        $this->request->session()->delete('Registers.code');

        if ($this->request->is('post')) {
            $user = $this->Users->newEntity($this->request->data);
            $userAuth = $this->Auth->identify();
            if ($userAuth) {
                $this->Auth->setUser($userAuth);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário ou senha inválidos, tente novamente'));
        }
        $this->set(compact('user'));
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function register()
    {
        $user = $this->Users->newEntity();
        $this->title_for_layout = 'Cadastro de usuário';

        $code = $this->request->session()->read('Registers.code');
        $register = $this->Users->Registers->find('all', ['contain' => ['Users']])
        ->where(['Registers.code' => $code, 'Registers.status' => 1, 'Registers.validate >=' => date('Y-m-d')])
        ->first();
        if(!empty($register->id) && empty($register->users)) {
            if($this->request->is(['patch', 'post', 'put'])) {

                $this->request->data['register_id'] = $register->id;
                $this->request->data['user_type_id'] = 2; //travado para cadastro de usuario tipo cliente
                $this->request->data['cpf'] = str_replace(array('.', '-'), '', $this->request->data['cpf']);

                $user = $this->Users->newEntity($this->request->data);
                $user = $this->Users->patchEntity($user, $this->request->data);

                if($this->Users->save($user)) {
                    $this->Flash->success(__('Cadastro realizado com sucesso!'));
                    $userAuth = $this->Auth->identify();
                    if ($userAuth) {
                        $this->request->session()->delete('Registers.code');
                        $this->Auth->setUser($userAuth);
                        return $this->redirect($this->Auth->redirectUrl());
                    }
                } else {
                    $this->Flash->error(__('Foram encontrados erros no formulário, por favor verifique os erros e tente novamente.'));
                }
            } 
            $this->set(compact('user'));
        } else {
            $this->Flash->error(__('Número serial inválido, tente novamente.'));
            return $this->redirect(['controller' => 'registers', 'action' => 'index']);
        }
    }

    public function myProfile()
    {
        $user = $this->Users->get($this->Auth->user('id'), [
            'contain' => []
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            unset($this->request->data['cpf']);
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Alteração realiada com sucesso.'));

                return $this->redirect(['controller' => 'pages', 'action' => 'display']);
            } else {
                $this->Flash->error(__('Erro na operação. Por favor verifique o formuário e tente novamente.'));
            }
        }
        $registers = $this->Users->Registers->find('list', ['limit' => 200]);
        $userTypes = $this->Users->UserTypes->find('list', ['limit' => 200]);
        $offices = $this->Users->Offices->find('list', ['limit' => 200]);
        $this->set(compact('user', 'registers', 'userTypes', 'offices'));
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
        'contain' => ['Registers', 'UserTypes', 'Offices']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Registers', 'UserTypes', 'Offices']
            ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {

            $this->request->data['user_type_id'] = 1;
            $this->request->data['validate'] = '2020-10-10';
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $registers = $this->Users->Registers->find('list', ['limit' => 200]);
        $userTypes = $this->Users->UserTypes->find('list', ['limit' => 200]);
        $offices = $this->Users->Offices->find('list', ['limit' => 200]);
        $this->set(compact('user', 'registers', 'userTypes', 'offices'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $registers = $this->Users->Registers->find('list', ['limit' => 200]);
        $userTypes = $this->Users->UserTypes->find('list', ['limit' => 200]);
        $offices = $this->Users->Offices->find('list', ['limit' => 200]);
        $this->set(compact('user', 'registers', 'userTypes', 'offices'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
