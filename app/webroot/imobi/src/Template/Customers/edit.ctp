<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Editar cliente <?= $title ?></h2>
    </div>
</div>

<div class="row">

    <div class="col-xs-12">
        <?= $this->Form->create($customer) ?>
        <?= $this->Form->hidden('customer_type_id', ['value' => $customer_type_id]) ?>
        <?= $this->Form->hidden('id') ?>
        <fieldset>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <?= $this->Form->input('name', ['class' => 'form-control', 'label' => 'Nome']) ?>
                    </div>
                </div>
                <?php if($companyName) { ?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $this->Form->input('company_name', ['class' => 'form-control', 'label' => 'Nome da empresa']) ?>
                    </div>
                </div>
                <?php } ?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $this->Form->input('cpf_cnpj', ['class' => 'form-control '.strtolower($cpfCnpj), 'label' => $cpfCnpj, 'maxlength' => false]) ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $this->Form->input('phone', ['class' => 'form-control phone_with_ddd', 'label' => 'Telefone']) ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $this->Form->input('mobile', ['class' => 'form-control phone_with_ddd', 'label' => 'Celular']) ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $this->Form->input('email', ['class' => 'form-control', 'label' => 'E-mail']) ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <?= $this->Form->input('status', ['label' => 'Ativo']) ?>
                    </div>
                </div>
            </div>
        </fieldset>
        <?= $this->Form->button('Salvar', ['class' => 'btn btn-success']) ?>
        <?= $this->Html->link('Cancelar', ['action' => 'index', $customer_type_id], ['class' => 'btn btn-danger'])?>
        <?= $this->Form->end() ?>
    </div>
</div>
