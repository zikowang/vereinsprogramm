<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DepartmentsUser $departmentsUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $departmentsUser->department_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsUser->department_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Departments Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departmentsUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($departmentsUser) ?>
    <fieldset>
        <legend><?= __('Edit Departments User') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
