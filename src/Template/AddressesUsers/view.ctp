<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AddressesUser $addressesUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Addresses User'), ['action' => 'edit', $addressesUser->address_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Addresses User'), ['action' => 'delete', $addressesUser->address_id], ['confirm' => __('Are you sure you want to delete # {0}?', $addressesUser->address_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Addresses Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addresses User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="addressesUsers view large-9 medium-8 columns content">
    <h3><?= h($addressesUser->address_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= $addressesUser->has('address') ? $this->Html->link($addressesUser->address->id, ['controller' => 'Addresses', 'action' => 'view', $addressesUser->address->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $addressesUser->has('user') ? $this->Html->link($addressesUser->user->id, ['controller' => 'Users', 'action' => 'view', $addressesUser->user->id]) : '' ?></td>
        </tr>
    </table>
</div>
