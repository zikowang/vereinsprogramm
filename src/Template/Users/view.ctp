<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container-fluid">
        <h1><?= __('View User') ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-8 col-md-6">
        <ul class="list-group bmd-list-group-sm">
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('State') ?></p>
                    <p class="list-group-item-text"><?= $user->has('state') ? $this->Html->link($user->state->name, ['controller' => 'States', 'action' => 'view', $user->state->id]) : '' ?></p>
                </div>
            </li>
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Group') ?></p>
                    <p class="list-group-item-text"><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></p>
                </div>
            </li>
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Firstname') ?></p>
                    <p class="list-group-item-text"><?= h($user->firstname) ?></p>
                </div>
            </li>
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Surname') ?></p>
                    <p class="list-group-item-text"><?= h($user->surname) ?></p>
                </div>
            </li>
        </ul>
    </div>

    <div class="col-12 col-sm-8 col-md-6">
        <ul class="list-group bmd-list-group-sm">
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Email') ?></p>
                    <p class="list-group-item-text"><?= h($user->email) ?></p>
                </div>
            </li>
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Created') ?></p>
                    <p class="list-group-item-text"><?= h($user->created) ?></p>
                </div>
            </li>
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Mdified') ?></p>
                    <p class="list-group-item-text"><?= h($user->modified) ?></p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="users view large-9 medium-8 columns content">
    <div class="related">
        <h4><?= __('Related Addresses') ?></h4>
        <?php if (!empty($user->addresses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Optname') ?></th>
                <th scope="col"><?= __('Street') ?></th>
                <th scope="col"><?= __('Houseno') ?></th>
                <th scope="col"><?= __('Zipcode') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->addresses as $addresses): ?>
            <tr>
                <td><?= h($addresses->id) ?></td>
                <td><?= h($addresses->optname) ?></td>
                <td><?= h($addresses->street) ?></td>
                <td><?= h($addresses->houseno) ?></td>
                <td><?= h($addresses->zipcode) ?></td>
                <td><?= h($addresses->city) ?></td>
                <td><?= h($addresses->country_id) ?></td>
                <td><?= h($addresses->created) ?></td>
                <td><?= h($addresses->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Addresses', 'action' => 'view', $addresses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Addresses', 'action' => 'edit', $addresses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Departments') ?></h4>
        <?php if (!empty($user->departments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->departments as $departments): ?>
            <tr>
                <td><?= h($departments->id) ?></td>
                <td><?= h($departments->name) ?></td>
                <td><?= h($departments->description) ?></td>
                <td><?= h($departments->created) ?></td>
                <td><?= h($departments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $departments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $departments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departments', 'action' => 'delete', $departments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Roles') ?></h4>
        <?php if (!empty($user->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->roles as $roles): ?>
            <tr>
                <td><?= h($roles->id) ?></td>
                <td><?= h($roles->name) ?></td>
                <td><?= h($roles->created) ?></td>
                <td><?= h($roles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $roles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $roles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $roles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
