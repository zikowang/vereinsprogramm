<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DepartmentsPrice $departmentsPrice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $departmentsPrice->department_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsPrice->department_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Departments Prices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prices'), ['controller' => 'Prices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Price'), ['controller' => 'Prices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departmentsPrices form large-9 medium-8 columns content">
    <?= $this->Form->create($departmentsPrice) ?>
    <fieldset>
        <legend><?= __('Edit Departments Price') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
