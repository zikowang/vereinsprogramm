<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container-fluid">
        <h1><?= __('Add Price') ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6">
    <?= $this->Form->create($price) ?>
        <div class="form-group">
            <?= $this->Form->control('name', [
                'class' => 'form-control',
                'label' => [
                    'class' => 'bmd-label-floating'
                ]
            ]); ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('price', [
                'class' => 'form-control',
                'label' => [
                    'class' => 'bmd-label-floating'
                ]
            ]); ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('departments._ids', [
                'type' => 'select',
                'options' => $departments,
                'class' => 'form-control',
                'empty' => __('Please Select'),
                'label' => [
                    'class' => 'bmd-label-floating'
                ]
            ]); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-8 col-md-6">
        <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn']) ?>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-raised btn-primary float-right']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
