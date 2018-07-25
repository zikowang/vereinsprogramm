<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DepartmentsUsers Controller
 *
 * @property \App\Model\Table\DepartmentsUsersTable $DepartmentsUsers
 *
 * @method \App\Model\Entity\DepartmentsUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartmentsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments', 'Users']
        ];
        $departmentsUsers = $this->paginate($this->DepartmentsUsers);

        $this->set(compact('departmentsUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Departments User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departmentsUser = $this->DepartmentsUsers->get($id, [
            'contain' => ['Departments', 'Users']
        ]);

        $this->set('departmentsUser', $departmentsUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departmentsUser = $this->DepartmentsUsers->newEntity();
        if ($this->request->is('post')) {
            $departmentsUser = $this->DepartmentsUsers->patchEntity($departmentsUser, $this->request->getData());
            if ($this->DepartmentsUsers->save($departmentsUser)) {
                $this->Flash->success(__('The departments user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departments user could not be saved. Please, try again.'));
        }
        $departments = $this->DepartmentsUsers->Departments->find('list', ['limit' => 200]);
        $users = $this->DepartmentsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('departmentsUser', 'departments', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departments User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departmentsUser = $this->DepartmentsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departmentsUser = $this->DepartmentsUsers->patchEntity($departmentsUser, $this->request->getData());
            if ($this->DepartmentsUsers->save($departmentsUser)) {
                $this->Flash->success(__('The departments user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departments user could not be saved. Please, try again.'));
        }
        $departments = $this->DepartmentsUsers->Departments->find('list', ['limit' => 200]);
        $users = $this->DepartmentsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('departmentsUser', 'departments', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departments User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departmentsUser = $this->DepartmentsUsers->get($id);
        if ($this->DepartmentsUsers->delete($departmentsUser)) {
            $this->Flash->success(__('The departments user has been deleted.'));
        } else {
            $this->Flash->error(__('The departments user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
