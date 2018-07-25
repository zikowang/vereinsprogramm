<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AddressesUser $addressesUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $addressesUser->address_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $addressesUser->address_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Addresses Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addressesUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($addressesUser) ?>
    <fieldset>
        <legend><?= __('Edit Addresses User') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
