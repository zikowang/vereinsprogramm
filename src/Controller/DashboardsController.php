<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Dashboards Controller
 *
 * @property \App\Model\Table\DashboardsTable $Dashboards
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $user = TableRegistry::get('Users')->find();
        $this->set([
            'user' => $user,
            '_serialize' => ['user']
        ]);
    }
}
