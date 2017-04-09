<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['User']), ['action' => 'edit', $user->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['User']), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Users']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['User']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Companies']), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Company']), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Projects']), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Project']), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Teams']), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Team']), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="users col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($user->name) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Login</th>
                        <td><?= h($user->login) ?></td>
                    </tr>
                                                        <tr>
                        <th>Password</th>
                        <td><?= h($user->password) ?></td>
                    </tr>
                                                        <tr>
                        <th>Name</th>
                        <td><?= h($user->name) ?></td>
                    </tr>
                                                        <tr>
                        <th>Email</th>
                        <td><?= h($user->email) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($user->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modified</th>
                        <td><?= h($user->modified) ?></tr>
                    </tr>
                                                                    <tr>
                        <th>Type</th>
                        <td><?= $user->type ? __('Yes') : __('No'); ?></td>
                     </tr>
                                        </table>
                                        <div class="related">
                    <?php if (!empty($user->companies)): ?>
                    <h4><?= __('Related {0}', ['Companies']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>User Id</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->companies as $companies): ?>
                        <tr>
                            <td><?= h($companies->id) ?></td>
                            <td><?= h($companies->created) ?></td>
                            <td><?= h($companies->modified) ?></td>
                            <td><?= h($companies->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>

                                <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>

                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                        <div class="related">
                    <?php if (!empty($user->projects)): ?>
                    <h4><?= __('Related {0}', ['Projects']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Client</th>
                                        <th>Client Email</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>User Id</th>
                                        <th>Companies Id</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->projects as $projects): ?>
                        <tr>
                            <td><?= h($projects->id) ?></td>
                            <td><?= h($projects->name) ?></td>
                            <td><?= h($projects->client) ?></td>
                            <td><?= h($projects->client_email) ?></td>
                            <td><?= h($projects->status) ?></td>
                            <td><?= h($projects->created) ?></td>
                            <td><?= h($projects->modified) ?></td>
                            <td><?= h($projects->user_id) ?></td>
                            <td><?= h($projects->companies_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>

                                <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>

                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                        <div class="related">
                    <?php if (!empty($user->teams)): ?>
                    <h4><?= __('Related {0}', ['Teams']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>User Id</th>
                                        <th>Project Id</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->teams as $teams): ?>
                        <tr>
                            <td><?= h($teams->id) ?></td>
                            <td><?= h($teams->created) ?></td>
                            <td><?= h($teams->modified) ?></td>
                            <td><?= h($teams->user_id) ?></td>
                            <td><?= h($teams->project_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $teams->id]) ?>

                                <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $teams->id]) ?>

                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                </div>
    </div>
</div>
