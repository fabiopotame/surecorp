<div class="container">
	<div>&nbsp;</div>
	<h2>Adicionar novo usuário</h2>
	<?php echo $this->Form->create('Restful', array('type' => 'get', 'inputDefaults' => array('class' => 'form-control'))) ?>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-6">
						<?php echo $this->Form->input('name', array('label' => 'Nome', 'maxlength' => 60, 'required' => true)); ?>	
					</div>
					<div class="col-xs-6">
						<?php echo $this->Form->input('last_name', array('label' => 'Sobrenome', 'maxlength' => 60)); ?>	
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-6">
						<?php echo $this->Form->input('email', array('label' => 'E-mail', 'maxlength' => 60, 'required' => true)); ?>	
					</div>
					<div class="col-xs-3">
						<?php echo $this->Form->input('phone', array('label' => 'Telefone', 'maxlength' => 14)); ?>	
					</div>
					<div class="col-xs-3">
						<?php echo $this->Form->input('cellphone', array('label' => 'Celular', 'maxlength' => 14)); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-6">
						<?php echo $this->Form->input('address', array('label' => 'Endereço', 'maxlength' => 60)); ?>	
					</div>
					<div class="col-xs-2">
						<?php echo $this->Form->input('number', array('label' => 'Número', 'maxlength' => 10)); ?>	
					</div>
					<div class="col-xs-4">
						<?php echo $this->Form->input('complement', array('label' => 'Complemento', 'maxlength' => 20)); ?>	
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-6">
						<?php echo $this->Form->input('neighborhood', array('label' => 'Bairro', 'maxlength' => 40)); ?>	
					</div>
					<div class="col-xs-4">
						<?php echo $this->Form->input('city', array('label' => 'Cidade', 'maxlength' => 40)); ?>	
					</div>
					<div class="col-xs-2">
						<?php echo $this->Form->input('province', array('label' => 'Estado', 'options' => $provinces, 'empty' => 'Selecione')); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-xs-12">
			<?php echo $this->Form->button('Salvar', array('class' => 'btn btn-success')); ?>
			<?php echo $this->Html->link('Voltar', array('action' => 'index'), array('class' => 'btn btn-danger')) ?>
		</div>
	</div>
	<?php echo $this->Form->end(); ?>
</div>

<!-- Modal -->
<div class="modal fade" id="viewJson" tabindex="-1" role="dialog" aria-labelledby="viewJsonLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Dados recebidos em Json</h4>
			</div>
			<div class="modal-body">
				<?php
				if(!empty($json)) {	
					echo $json;
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>