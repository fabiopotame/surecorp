<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Register'), ['action' => 'edit', $register->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Register'), ['action' => 'delete', $register->id], ['confirm' => __('Are you sure you want to delete # {0}?', $register->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Registers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Register'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offices'), ['controller' => 'Offices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Office'), ['controller' => 'Offices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="registers view large-9 medium-8 columns content">
    <h3><?= h($register->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($register->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($register->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validate') ?></th>
            <td><?= h($register->validate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($register->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($register->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $register->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Offices') ?></h4>
        <?php if (!empty($register->offices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Register Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($register->offices as $offices): ?>
            <tr>
                <td><?= h($offices->id) ?></td>
                <td><?= h($offices->name) ?></td>
                <td><?= h($offices->description) ?></td>
                <td><?= h($offices->status) ?></td>
                <td><?= h($offices->register_id) ?></td>
                <td><?= h($offices->created) ?></td>
                <td><?= h($offices->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Offices', 'action' => 'view', $offices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Offices', 'action' => 'edit', $offices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Offices', 'action' => 'delete', $offices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($register->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Register Id') ?></th>
                <th scope="col"><?= __('User Type Id') ?></th>
                <th scope="col"><?= __('Office Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($register->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->register_id) ?></td>
                <td><?= h($users->user_type_id) ?></td>
                <td><?= h($users->office_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->status) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
