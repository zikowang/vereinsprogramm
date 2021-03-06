<div class="jumbotron jumbotron-fluid bg-primary text-light">
    <div class="container-fluid">
        <h1><?= __('Departments') ?></h1>
        <div class="btn-group">
            <a href="/departments/add" class="btn btn-raised btn-info"><?= __('Add') ?></a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($departments as $department): ?>
                    <tr>
                        <th scope="row"><?= $this->Number->format($department->id) ?></th>
                        <td><?= h($department->name) ?></td>
                        <td><?= h($department->description) ?></td>
                        <td><?= h($department->created->i18nFormat('dd.MM.yyyy')) ?></td>
                        <td><?= h($department->modified->i18nFormat('dd.MM.yyyy')) ?></td>
                        <td class="actions">
                            <div class="btn-group">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $department->id], ['class' => 'btn btn-raised btn-sm btn-primary']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $department->id], ['class' => 'btn btn-raised btn-sm btn-primary']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id), 'class' => 'btn btn-raised btn-sm btn-danger']) ?>
                            </div>
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
</div>
