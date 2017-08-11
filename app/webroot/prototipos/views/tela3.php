<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-2">
			<?php include_once('elements/menu3.php'); ?>
		</div>
		<div class="col-sm-9 col-md-10">
			<div class="row">
				<div class="col-xs-12">
					<button type="button" class="btn btn-danger border-radius-20"><span class="glyphicon glyphicon-triangle-left aria-hidden="true"></span></button>
				</div>
			</div>
			<div class="row margin-top-30">
				<div class="col-sm-3 color-gray">
					Coordenador atual:
				</div>
				<div class="col-sm-8">
					<span class="pull-left"></span> <input type="text" name="search" class="col-xs-12" placeholder="Buscar por nome ou cargo">
				</div>
				<div class="col-sm-1">
					<span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span>
				</div>
			</div>

			<div class="row margin-top-30">
				<div class="col-sm-3 color-gray">
					Novo Coordenador:
				</div>
				<div class="col-sm-8">
					<span class="pull-left"></span> <input type="text" name="search" class="col-xs-12" placeholder="Buscar por nome ou cargo">
				</div>
				<div class="col-sm-1">
					<span class="glyphicon glyphicon-search color-red" aria-hidden="true"></span>
				</div>
			</div>

			<div class="row margin-top-30">
				<div class="col-sm-3"></div>
				<div class="col-sm-9">
					<button type="button" class="btn btn-success">Confirma</button>
					<button type="button" class="btn btn-danger">Cancela</button>
				</div>
			</div>	

			<div class="row margin-top-30">
				<div class="col-sm-3"></div>
				<div class="col-sm-9">
					<div class="text-center color-red background-color-lightgray padding-top-30 padding-bottom-30">
						<strong><u>IMPORTANTE:</u></strong><br>
						Ao registrar um novo Coordenador, o usuário Coordenador atual perderá as permissões especiais pois será substituído.
					</div>
				</div>

			</div>

		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('.title').text('Cadastra Cordenador');
	});
</script>