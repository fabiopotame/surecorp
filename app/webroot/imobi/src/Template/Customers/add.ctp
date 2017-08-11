<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Adicionar novo cliente</h2>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<?= $this->Form->create($customer) ?>
		<?= $this->Form->hidden('customer_type_id', ['value' => $customer_type_id]) ?>
		<fieldset>
			<div class="row">
				<div class="col-xs-12">
					<h4>Dados pessoais</h4>
				</div>  
				<div>&nbsp;</div>
				<div class="col-sm-4">
					<div class="form-group">
						<?= $this->Form->input('name', ['class' => 'form-control', 'label' => 'Nome']) ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<?= $this->Form->input('cpf_cnpj', ['class' => 'form-control '.strtolower($cpfCnpj), 'label' => $cpfCnpj, 'maxlength' => false]) ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<?= $this->Form->input('email', ['class' => 'form-control', 'label' => 'E-mail']) ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<?= $this->Form->input('phone', ['class' => 'form-control phone_with_ddd', 'label' => 'Telefone']) ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<?= $this->Form->input('mobile', ['class' => 'form-control phone_with_ddd', 'label' => 'Celular']) ?>
					</div>
				</div>
			</div>
			<dv class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<?= $this->Form->input('is_owner', ['label' => 'É um proprietário']) ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<?= $this->Form->input('is_renter', ['label' => 'É um inquilino']) ?>
					</div>
				</div>
			</dv>
			<hr>
			<div class="row">
				<div class="col-xs-12">
					<h4>Endereços</h4>
				</div>  
				<div>&nbsp;</div>
				<div class="col-xs-12">
					<button type="button" class="btn btn-success btn-xs js-new-address" data-toggle="tooltip" data-title="Adicionar novo endereço"><i class="fa fa-plus fa-fw"></i></button>
				</div>
				<div>&nbsp;</div>


				<div class="js-memory-address hide">
					<div class="ingroup">
						<div class="col-xs-12"><hr></div>
						<div class="col-xs-11">
							<div class="row">
								<div class="col-xs-3">
									<div class="form-group">
										<?= $this->Form->input('Addresses.xx.zipcode', ['class' => 'form-control', 'label' => 'CEP', 'disabled' =>true]) ?>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<?= $this->Form->input('Addresses.xx.address', ['class' => 'form-control', 'label' => 'Endereço', 'disabled' =>true]) ?>
									</div>
								</div>
								<div class="col-xs-2">
									<div class="form-group">
										<?= $this->Form->input('Addresses.xx.number', ['class' => 'form-control', 'label' => 'Número', 'disabled' =>true]) ?>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<?= $this->Form->input('Addresses.xx.complement', ['class' => 'form-control', 'label' => 'Complemento', 'disabled' =>true]) ?>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<?= $this->Form->input('Addresses.xx.neighborhood', ['class' => 'form-control', 'label' => 'Bairro', 'disabled' =>true]) ?>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<?= $this->Form->input('Addresses.xx.city', ['class' => 'form-control', 'label' => 'Cidade', 'disabled' =>true]) ?>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<?= $this->Form->input('Addresses.xx.province', ['class' => 'form-control', 'label' => 'Estado', 'disabled' =>true]) ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-1 padding-top-30">
							<button type="button" class="btn btn-danger btn-xs js-remove-address" data-toggle="tooltip" data-title="Remover este endereço"><i class="fa fa-minus fa-fw"></i></button>
						</div>
					</div>
				</div>
				<div class="js-canvas-address"></div>
			</div>
			<hr>
			<div class="row">
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

<script type="text/javascript">
	$(document).ready(function($) {
		var i = 0;
		$('.js-new-address').click(function() {
			var inputMemoryAddress = $('.js-memory-address').html();
			inputMemoryAddress = inputMemoryAddress.replace(/xx/g, i).replace(/disabled="disabled"/g, '');
			i++;
			$('.js-canvas-address').append(inputMemoryAddress);
			$('[data-toggle="tooltip"]').tooltip();
		});

		$('body').on('click', '.js-remove-address', function() {
			$(this).parents('.ingroup').remove();
		})
	});


</script>
