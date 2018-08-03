<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container-fluid">
        <h1><?= __('User') ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-8 col-md-6">
        <ul class="list-group bmd-list-group-sm">
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Name') ?></p>
                    <p class="list-group-item-text"><?= h($price->name) ?></p>
                </div>
            </li>
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Price') ?></p>
                    <p class="list-group-item-text"><?= h($price->price) ?></p>
                </div>
            </li>
        </ul>
    </div>

    <div class="col-12 col-sm-8 col-md-6">
        <ul class="list-group bmd-list-group-sm">
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Created') ?></p>
                    <p class="list-group-item-text"><?= h($price->created) ?></p>
                </div>
            </li>
            <li class="list-group-item">
                <div class="bmd-list-group-col">
                    <p class="list-group-item-heading"><?= __('Mdified') ?></p>
                    <p class="list-group-item-text"><?= h($price->modified) ?></p>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-12 related">
        <h4><?= __('Related Departments') ?></h4>
        <?php if (!empty($price->departments)): ?>
        <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($price->departments as $departments): ?>
            <tr>
                <td><?= h($departments->id) ?></td>
                <td><?= h($departments->name) ?></td>
                <td><?= h($departments->description) ?></td>
                <td><?= h($departments->created) ?></td>
                <td><?= h($departments->modified) ?></td>
                <td class="actions">
                    <div class="btn-group btn-inline">
                        <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $departments->id], ['class' => 'btn btn-sm btn-raised btn-primary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $departments->id], ['class' => 'btn btn-sm btn-raised btn-primary']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departments', 'action' => 'delete', $departments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departments->id), 'class' => 'btn btn-sm btn-raised btn-danger']) ?>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
