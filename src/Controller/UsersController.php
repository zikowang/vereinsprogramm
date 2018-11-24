<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States', 'Groups']
        ];
        $users = $this->paginate($this->Users);

        $this->set([
            'users' => $users,
            '_serialize' => ['users']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['States', 'Groups', 'Addresses', 'Departments', 'Roles']
        ]);

        $this->set([
            'user' => $user,
            '_serialize' => ['user']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $states = $this->Users->States->find('list', ['limit' => 200]);
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $addresses = $this->Users->Addresses->find('list', ['limit' => 200]);
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'states', 'groups', 'addresses', 'departments', 'roles'));

        $this->set([
            'user' => $user,
            '_serialize' => ['user', 'states', 'groups', 'addresses', 'departments', 'roles']
        ]);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Addresses', 'Departments', 'Roles']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $states = $this->Users->States->find('list', ['limit' => 200]);
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $addresses = $this->Users->Addresses->find('list', ['limit' => 200]);
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);

        $this->set([
            'user' => $user,
            '_serialize' => ['user', 'states', 'groups', 'addresses', 'departments', 'roles']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
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
