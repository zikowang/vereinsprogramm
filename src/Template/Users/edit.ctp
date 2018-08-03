<div class="jumbotron jumbotron-fluid bg-primary text-light">
    <div class="container-fluid">
        <h1><?= __('Edit User') ?></h1>
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
                    'type' => 'select',
                    'options' => @$states,
                    'class' => 'form-control',
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('group_id', [
                    'type' => 'select',
                    'options' => @$groups,
                    'class' => 'form-control',
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
                    , 'div' => false]); ?>
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
                    'label' => [
                        'class' => 'bmd-label-floating'
                    ]
                ]); ?>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
            <label class="bmd-label-floating"><?= __('Addresses') ?></label>
                <?= $this->Form->select('addresses._ids', $addresses, [
                    'multiple' => true,
                    'class' => 'form-control'
                ]); ?>
            </div>
            <div class="form-group">
            <label class="bmd-label-floating"><?= __('Departments') ?></label>
                <?= $this->Form->select('departments._ids', $departments, [
                    'multiple' => true,
                    'class' => 'form-control'
                ]); ?>
            </div>
            <div class="form-group">
            <label class="bmd-label-floating"><?= __('Roles') ?></label>
                <?= $this->Form->select('roles._ids', $roles, [
                    'multiple' => true,
                    'class' => 'form-control'
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
