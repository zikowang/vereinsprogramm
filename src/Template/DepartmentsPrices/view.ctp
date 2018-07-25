<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DepartmentsPrice $departmentsPrice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departments Price'), ['action' => 'edit', $departmentsPrice->department_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departments Price'), ['action' => 'delete', $departmentsPrice->department_id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsPrice->department_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departments Prices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departments Price'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prices'), ['controller' => 'Prices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Price'), ['controller' => 'Prices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departmentsPrices view large-9 medium-8 columns content">
    <h3><?= h($departmentsPrice->department_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $departmentsPrice->has('department') ? $this->Html->link($departmentsPrice->department->name, ['controller' => 'Departments', 'action' => 'view', $departmentsPrice->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $departmentsPrice->has('price') ? $this->Html->link($departmentsPrice->price->name, ['controller' => 'Prices', 'action' => 'view', $departmentsPrice->price->id]) : '' ?></td>
        </tr>
    </table>
</div>
