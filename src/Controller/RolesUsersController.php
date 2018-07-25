<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RolesUsers Controller
 *
 * @property \App\Model\Table\RolesUsersTable $RolesUsers
 *
 * @method \App\Model\Entity\RolesUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolesUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Users']
        ];
        $rolesUsers = $this->paginate($this->RolesUsers);

        $this->set(compact('rolesUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Roles User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolesUser = $this->RolesUsers->get($id, [
            'contain' => ['Roles', 'Users']
        ]);

        $this->set('rolesUser', $rolesUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolesUser = $this->RolesUsers->newEntity();
        if ($this->request->is('post')) {
            $rolesUser = $this->RolesUsers->patchEntity($rolesUser, $this->request->getData());
            if ($this->RolesUsers->save($rolesUser)) {
                $this->Flash->success(__('The roles user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roles user could not be saved. Please, try again.'));
        }
        $roles = $this->RolesUsers->Roles->find('list', ['limit' => 200]);
        $users = $this->RolesUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('rolesUser', 'roles', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Roles User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolesUser = $this->RolesUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolesUser = $this->RolesUsers->patchEntity($rolesUser, $this->request->getData());
            if ($this->RolesUsers->save($rolesUser)) {
                $this->Flash->success(__('The roles user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roles user could not be saved. Please, try again.'));
        }
        $roles = $this->RolesUsers->Roles->find('list', ['limit' => 200]);
        $users = $this->RolesUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('rolesUser', 'roles', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Roles User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolesUser = $this->RolesUsers->get($id);
        if ($this->RolesUsers->delete($rolesUser)) {
            $this->Flash->success(__('The roles user has been deleted.'));
        } else {
            $this->Flash->error(__('The roles user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
