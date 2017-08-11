<div class="container min-height-window">
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-warning" role="alert">
                <strong>Psiu!</strong> quero te lembrar que esta conta será uma conta de <strong>Administrador</strong>. Lembre-se que a partir desta conta você irá criar novas contas, gerenciar acessos, parametrizar configurações e muitas outras coisas, aliás, ela não deverá ser excluída, pois assim você perderá o acesso ao sistema e todas as suas informações salvas, e não queremos isso não é verdade?
            </div>
        </div>
        <div class="col-xs-12">
            <div class="register-style pull-left">
                <?= $this->Form->create($user) ?>
                <div class="col-xs-12">
                    <h3>Preencha os dados abaixo:</h3>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $this->Form->input('name', ['class' => 'form-control', 'label' => 'Nome', 'placeholder' => 'Nome']) ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $this->Form->input('last_name', ['class' => 'form-control', 'label' => 'Sobrenome', 'placeholder' => 'Sobrenome']) ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $this->Form->input('cpf', ['class' => 'form-control cpf', 'label' => 'CPF', 'placeholder' => 'CPF', 'maxlength' => false]) ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $this->Form->input('phone', ['class' => 'form-control phone_with_ddd', 'label' => 'Telefone', 'placeholder' => 'Telefone']) ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $this->Form->input('mobile', ['class' => 'form-control phone_with_ddd', 'label' => 'Celular', 'placeholder' => 'Celular']) ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $this->Form->input('username', ['class' => 'form-control', 'label' => 'E-mail', 'placeholder' => 'E-mail']) ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $this->Form->input('password', ['class' => 'form-control', 'label' => 'Senha', 'placeholder' => 'Senha']) ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <?= $this->Form->button('Cadastrar', ['class' => 'btn btn-primary margin-bottom-15'])?>
                    <?= $this->Html->link('Cancelar', ['controller' => 'pages'], ['class' => 'btn btn-danger margin-bottom-15']) ?>
                </div>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>
