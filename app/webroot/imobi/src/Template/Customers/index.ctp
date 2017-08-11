<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header"><?= $pageTitle ?></h2>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <?= $this->Html->link('<i class="fa fa-plus fa-fw"></i>', ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false, 'data-toggle' => 'tooltip', 'data-title' => 'Adicionar novo cliente']) ?>
    </div>
</div>

<div class="row margin-top-15">
<div class="col-xs-12">
        <table class="table" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id', 'Código') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name', 'Nome') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('cpf_cnpj', 'CPF') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('phone', 'Telefone') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('mobile', 'Celular') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email', 'E-mail') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= $this->Number->format($customer->id) ?></td>
                        <td><?= h($customer->name) ?></td>
                        <td><?= h($customer->cpf_cnpj) ?></td>
                        <td><?= h($customer->phone) ?></td>
                        <td><?= h($customer->mobile) ?></td>
                        <td><?= h($customer->email) ?></td>
                        <td><?= $this->Default->checkStatus($customer->status)?></td>
                        <td class="actions">
                            <?= $this->Html->link('<i class="fa fa-eye fa-fw"></i>', ['action' => 'view', $customer->id], ['class' => 'btn btn-default btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'data-title' => 'Visualizar']) ?>

                            <?= $this->Html->link('<i class="fa fa-edit fa-fw"></i>', ['action' => 'edit', $customer->id, $customer_type_id], ['class' => 'btn btn-default btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'data-title' => 'Editar']) ?>
                            <?= $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i>', ['action' => 'delete', $customer->id], ['class' => 'btn btn-default btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'data-title' => 'Excluir', 'confirm' => __('Tem certeza que deseja excluir o cliente código {0}?', $customer->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('próximo') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
