<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container-fluid">
        <h1><?= __('Prices') ?></h1>
        <div class="btn-group">
            <a href="/prices/add" class="btn btn-outline-primary"><?= __('Add') ?></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
            <thead class="thead-light">
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prices as $price): ?>
                <tr>
                    <th scope="row"><?= $this->Number->format($price->id) ?></th>
                    <td><?= h($price->name) ?></td>
                    <td><?= h($price->price) ?></td>
                    <td><?= h($price->created) ?></td>
                    <td><?= h($price->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $price->id], ['class' => 'btn btn-raised btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $price->id], ['class' => 'btn btn-raised btn-sm btn-primary']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $price->id], ['confirm' => __('Are you sure you want to delete # {0}?', $price->id), 'class' => 'btn btn-raised btn-sm btn-danger']) ?>
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
