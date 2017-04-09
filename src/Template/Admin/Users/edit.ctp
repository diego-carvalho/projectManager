<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $user->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
                    )
                ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Users'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="users col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit User' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('login');
                                    echo $this->Form->input('password');
                                    echo $this->Form->input('name');
                                    echo $this->Form->input('email');
                                    echo $this->Form->input('type');
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
