<div class="jumbotron jumbotron-fluid bg-primary text-light">
    <div class="container-fluid">
        <h1><?= __('Add User') ?></h1>
        <div class="btn-group">
            <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-sm btn-raised btn-warning']) ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
        <?= $this->Form->create($user) ?>
            <div class="form-group">
            <?= $this->Form->control('state_id', [
                'options' => $states,
                'class' => 'form-control',
                'empty' => __('Please Select'),
                'label' => [
                    'class' => 'bmd-label-floating'
                ]
            ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('group_id', [
                    'options' => $groups,
                    'class' => 'form-control',
                    'empty' => __('Please Select'),
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('firstname', [
                    'class' => 'form-control',
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('surname', [
                    'class' => 'form-control',
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('email', [
                    'class' => 'form-control',
                    'default' => null,
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('addresses._ids', [
                    'type' => 'select',
                    'options' => $addresses,
                    'class' => 'form-control',
                    'empty' => __('Please Select'),
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->select('departments._ids', $departments, [
                    'multiple' => true,
                    'class' => 'form-control',
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('roles._ids', [
                    'type' => 'select',
                    'options' => $roles,
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
</div>
