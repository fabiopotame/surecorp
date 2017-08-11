<div class="row">
    <div class="col-lg-12">
    <h2 class="page-header">Meus dados</h2>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editar meus dados pessoais 
                <div class="panel-body">
                    <div class="row">
                        <?= $this->Form->create($user) ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $this->Form->input('name', ['class' => 'form-control', 'label' => 'Nome']) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $this->Form->input('last_name', ['class' => 'form-control', 'label' => 'Sobrenome']) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $this->Form->input('cpf', ['class' => 'form-control cpf', 'label' => 'CPF', 'maxlength' => false, 'disabled' => true]) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $this->Form->input('phone', ['class' => 'form-control phone_with_ddd', 'label' => 'Telefone']) ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?= $this->Form->input('mobile', ['class' => 'form-control hone_with_ddd', 'label' => 'Celular']) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $this->Form->input('username', ['class' => 'form-control', 'label' => 'E-mail']) ?>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <?= $this->Form->button('Salvar', ['class' => 'btn btn-success']) ?>
                            <?= $this->Html->link('Cancelar', ['controller' => 'pages', 'action' => 'display'], ['class' => 'btn btn-danger']) ?>

                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->