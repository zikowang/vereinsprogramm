<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container-fluid">
        <h1><?= __('Users') ?></h1>
        <div class="btn-group">
            <a href="/users/add" class="btn btn-outline-primary"><?= __('Add') ?></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
            <thead class="thead-light">
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <th scope="row"><?= $this->Number->format($user->id) ?></th>
                    <td><?= $user->has('state') ? $this->Html->link($user->state->name, ['controller' => 'States', 'action' => 'view', $user->state->id]) : '' ?></td>
                    <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
                    <td><?= h($user->firstname) ?></td>
                    <td><?= h($user->surname) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-raised btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-raised btn-sm btn-primary']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-raised btn-sm btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <nav class="paginator">
            <ul class="pagination">
                <li class="page-item">
                    <?= $this->Paginator->first('<< ' . __('first'), ['class' => 'page-link']) ?>&nbsp;
                </li>
                <li class="page-item">
                    <?= $this->Paginator->prev('<span aria-hidden="true">&laquo;</span>', ['class' => 'page-link', 'escape' => false]) ?>
                </li>
                <li class="page-item">
                    <?= $this->Paginator->numbers() ?>&nbsp;
                </li>
                <li class="page-item">
                    <?= $this->Paginator->next('<span aria-hidden="true">&raquo;</span>', ['class' => 'page-link', 'escape' => false]) ?>&nbsp;
                </li>
                <li class="page-item">
                    <?= $this->Paginator->last(__('last') . ' >>', ['class' => 'page-link']) ?>
                </li>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </nav>
    </div>
</div>
