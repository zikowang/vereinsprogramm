<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DepartmentsPrice[]|\Cake\Collection\CollectionInterface $departmentsPrices
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Departments Price'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prices'), ['controller' => 'Prices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Price'), ['controller' => 'Prices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departmentsPrices index large-9 medium-8 columns content">
    <h3><?= __('Departments Prices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departmentsPrices as $departmentsPrice): ?>
            <tr>
                <td><?= $departmentsPrice->has('department') ? $this->Html->link($departmentsPrice->department->name, ['controller' => 'Departments', 'action' => 'view', $departmentsPrice->department->id]) : '' ?></td>
                <td><?= $departmentsPrice->has('price') ? $this->Html->link($departmentsPrice->price->name, ['controller' => 'Prices', 'action' => 'view', $departmentsPrice->price->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $departmentsPrice->department_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departmentsPrice->department_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departmentsPrice->department_id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsPrice->department_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
