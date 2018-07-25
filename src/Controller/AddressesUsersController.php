<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AddressesUsers Controller
 *
 * @property \App\Model\Table\AddressesUsersTable $AddressesUsers
 *
 * @method \App\Model\Entity\AddressesUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AddressesUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Addresses', 'Users']
        ];
        $addressesUsers = $this->paginate($this->AddressesUsers);

        $this->set(compact('addressesUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Addresses User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addressesUser = $this->AddressesUsers->get($id, [
            'contain' => ['Addresses', 'Users']
        ]);

        $this->set('addressesUser', $addressesUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $addressesUser = $this->AddressesUsers->newEntity();
        if ($this->request->is('post')) {
            $addressesUser = $this->AddressesUsers->patchEntity($addressesUser, $this->request->getData());
            if ($this->AddressesUsers->save($addressesUser)) {
                $this->Flash->success(__('The addresses user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The addresses user could not be saved. Please, try again.'));
        }
        $addresses = $this->AddressesUsers->Addresses->find('list', ['limit' => 200]);
        $users = $this->AddressesUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('addressesUser', 'addresses', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Addresses User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addressesUser = $this->AddressesUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addressesUser = $this->AddressesUsers->patchEntity($addressesUser, $this->request->getData());
            if ($this->AddressesUsers->save($addressesUser)) {
                $this->Flash->success(__('The addresses user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The addresses user could not be saved. Please, try again.'));
        }
        $addresses = $this->AddressesUsers->Addresses->find('list', ['limit' => 200]);
        $users = $this->AddressesUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('addressesUser', 'addresses', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Addresses User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addressesUser = $this->AddressesUsers->get($id);
        if ($this->AddressesUsers->delete($addressesUser)) {
            $this->Flash->success(__('The addresses user has been deleted.'));
        } else {
            $this->Flash->error(__('The addresses user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
