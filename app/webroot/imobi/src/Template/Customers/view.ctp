<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Register') ?></th>
            <td><?= $customer->has('register') ? $this->Html->link($customer->register->id, ['controller' => 'Registers', 'action' => 'view', $customer->register->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Type') ?></th>
            <td><?= $customer->has('customer_type') ? $this->Html->link($customer->customer_type->name, ['controller' => 'CustomerTypes', 'action' => 'view', $customer->customer_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($customer->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($customer->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($customer->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($customer->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Last Modified') ?></th>
            <td><?= $this->Number->format($customer->user_last_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf Cnpj') ?></th>
            <td><?= $this->Number->format($customer->cpf_cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= $customer->created; ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= $customer->modified; ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $customer->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
