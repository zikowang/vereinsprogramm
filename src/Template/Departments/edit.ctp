<div class="jumbotron jumbotron-fluid bg-primary text-light">
    <div class="container-fluid">
        <h1><?= __('Edit Department') ?></h1>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <?= $this->Form->create($department) ?>
            <div class="form-group">
                <?= $this->Form->control('name', [
                    'class' => 'form-control',
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                    , 'div' => false]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('description', [
                    'class' => 'form-control',
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <?= $this->Form->select('prices._ids', @$prices, [
                    'multiple' => true,
                    'options' => @$prices,
                    'class' => 'form-control',
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->select('users._ids', @$users, [
                    'multiple' => true,
                    'options' => @$users,
                    'class' => 'form-control',
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
</div>
