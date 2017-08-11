    <div class="container clearfix">
        <div class="row">
            <div class="col-sm-3 col-md-4 hiden-xs"></div>
            <div class="col-sm-6 col-md-4">
                <div class="pull-left login-style">
                <div class=""> 
                        <div class="col-xs-12 text-center">
                            <?= $this->Html->image('padlock.png', ['class' => 'logo']) ?>
                        </div>
                        <div class="col-xs-12">
                           <?= $this->Form->create($user);  ?>
                           <div class="form-group">
                            <?= $this->Form->input('username', ['class' => 'form-control', 'placeholder' => 'E-mail', 'label' => 'E-mail']) ?>
                        </div>
                        <div class="form-group">
                           <?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'Senha', 'label' => 'Senha']) ?>
                       </div>
                       <div class="checkbox">
                        <label>
                            <input type="checkbox"> Lembrar de mim
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success margin-bottom-15">Entrar</button>
                    <?= $this->Html->link('Registrar nova conta', ['controller' => 'registers', 'action' => 'index'], ['class' => 'pull-right btn btn-primary']) ?>
                    <?= $this->Form->end(); ?>
                </div>  
            </div>
        </div>
    </div>
</div>
</div>