<div class="container min-height-window">
    <div class="row">
        <div class="col-sm-3 col-md-4"></div>
        <div class="col-sm-4 col-md-4">
            <div class="login-style pull-left">
            <div class="">
                    <?= $this->Form->create($register) ?>
                    <div class="col-xs-12 text-center">
                        <?= $this->Html->image('barcode.png', ['class' => 'img-responsive barcode inline-block']) ?>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <?= $this->Form->input('code', ['class' => 'form-control', 'label' => 'Digite o número serial', 'maxlength' => 16, 'placeholder' => 'Número serial']) ?>
                        </div>
                        <?= $this->Form->button('Validar', ['class' => 'btn btn-primary margin-bottom-15'])?>
                        <?= $this->Html->link('Cancelar', ['controller' => 'pages'], ['class' => 'btn btn-danger margin-bottom-15']) ?>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 