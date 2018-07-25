<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DepartmentsPrices Controller
 *
 * @property \App\Model\Table\DepartmentsPricesTable $DepartmentsPrices
 *
 * @method \App\Model\Entity\DepartmentsPrice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartmentsPricesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments', 'Prices']
        ];
        $departmentsPrices = $this->paginate($this->DepartmentsPrices);

        $this->set(compact('departmentsPrices'));
    }

    /**
     * View method
     *
     * @param string|null $id Departments Price id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departmentsPrice = $this->DepartmentsPrices->get($id, [
            'contain' => ['Departments', 'Prices']
        ]);

        $this->set('departmentsPrice', $departmentsPrice);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departmentsPrice = $this->DepartmentsPrices->newEntity();
        if ($this->request->is('post')) {
            $departmentsPrice = $this->DepartmentsPrices->patchEntity($departmentsPrice, $this->request->getData());
            if ($this->DepartmentsPrices->save($departmentsPrice)) {
                $this->Flash->success(__('The departments price has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departments price could not be saved. Please, try again.'));
        }
        $departments = $this->DepartmentsPrices->Departments->find('list', ['limit' => 200]);
        $prices = $this->DepartmentsPrices->Prices->find('list', ['limit' => 200]);
        $this->set(compact('departmentsPrice', 'departments', 'prices'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departments Price id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departmentsPrice = $this->DepartmentsPrices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departmentsPrice = $this->DepartmentsPrices->patchEntity($departmentsPrice, $this->request->getData());
            if ($this->DepartmentsPrices->save($departmentsPrice)) {
                $this->Flash->success(__('The departments price has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departments price could not be saved. Please, try again.'));
        }
        $departments = $this->DepartmentsPrices->Departments->find('list', ['limit' => 200]);
        $prices = $this->DepartmentsPrices->Prices->find('list', ['limit' => 200]);
        $this->set(compact('departmentsPrice', 'departments', 'prices'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departments Price id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departmentsPrice = $this->DepartmentsPrices->get($id);
        if ($this->DepartmentsPrices->delete($departmentsPrice)) {
            $this->Flash->success(__('The departments price has been deleted.'));
        } else {
            $this->Flash->error(__('The departments price could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
