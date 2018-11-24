<div class="jumbotron jumbotron-fluid bg-primary text-light">
    <div class="container-fluid">
        <h1><?= __('Department') ?></h1>
        <div class="btn-group">
            <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-sm btn-raised btn-warning']) ?>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $department->id], ['class' => 'btn btn-sm btn-raised btn-info']) ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6">
            <ul class="list-group bmd-list-group-sm">
                <li class="list-group-item">
                    <div class="bmd-list-group-col">
                        <p class="list-group-item-heading"><?= __('Name') ?></p>
                        <p class="list-group-item-text"><?= h($department->name) ?></p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="bmd-list-group-col">
                        <p class="list-group-item-heading"><?= __('Description') ?></p>
                        <p class="list-group-item-text"><?= h($department->description) ?></p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-12 col-sm-8 col-md-6">
            <ul class="list-group bmd-list-group-sm">
                <li class="list-group-item">
                    <div class="bmd-list-group-col">
                        <p class="list-group-item-heading"><?= __('Created') ?></p>
                        <p class="list-group-item-text"><?= h($department->created->i18nFormat('dd.MM.yyyy')) ?></p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="bmd-list-group-col">
                        <p class="list-group-item-heading"><?= __('Mdified') ?></p>
                        <p class="list-group-item-text"><?= h($department->modified->i18nFormat('dd.MM.yyyy')) ?></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<?php #var_dump($department); ?>
    <div class="row">
        <?php if (!empty($department->prices)): ?>
        <div class="col-12 related">
            <h4><?= __('Related Prices') ?></h4>
            <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Price') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($department->prices as $prices): ?>
                <tr>
                    <td><?= h($prices->id) ?></td>
                    <td><?= h($prices->name) ?></td>
                    <td><?= h($prices->price) ?></td>
                    <td><?= h($prices->created->i18nFormat('dd.MM.yyyy')) ?></td>
                    <td><?= h($prices->modified->i18nFormat('dd.MM.yyyy')) ?></td>
                    <td class="actions">
                        <div class="btn-group btn-inline">
                            <?= $this->Html->link(__('View'), ['controller' => 'Prices', 'action' => 'view', $prices->id], ['class' => 'btn btn-sm btn-raised btn-primary']) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Prices', 'action' => 'edit', $prices->id], ['class' => 'btn btn-sm btn-raised btn-primary']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prices', 'action' => 'delete', $prices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prices->id), 'class' => 'btn btn-sm btn-raised btn-danger']) ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
        <?php if (!empty($department->users)): ?>
        <div class="col-12 related">
            <h4><?= __('Related Users') ?></h4>
            <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('State Id') ?></th>
                    <th scope="col"><?= __('Group Id') ?></th>
                    <th scope="col"><?= __('Firstname') ?></th>
                    <th scope="col"><?= __('Surname') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($department->users as $users): ?>
                <tr>
                    <td><?= h($users->id) ?></td>
                    <td><?= h($users->state_id) ?></td>
                    <td><?= h($users->group_id) ?></td>
                    <td><?= h($users->firstname) ?></td>
                    <td><?= h($users->surname) ?></td>
                    <td><?= h($users->email) ?></td>
                    <td><?= h($users->created->i18nFormat('dd.MM.yyyy')) ?></td>
                    <td><?= h($users->modified->i18nFormat('dd.MM.yyyy')) ?></td>
                    <td class="actions">
                        <div class="btn-group btn-inline">
                            <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class' => 'btn btn-sm btn-raised btn-primary']) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class' => 'btn btn-sm btn-raised btn-primary']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'class' => 'btn btn-sm btn-raised btn-danger']) ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
