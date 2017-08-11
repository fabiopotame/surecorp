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
					Selecione a Categoria:
				</div>
				<div class="col-sm-8">
					<span class="pull-left"></span> <input type="text" name="search" class="col-xs-12" placeholder="Buscar por nome ou cargo">
				</div>
				<div class="col-sm-1">
					<span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span>
				</div>
			</div>

			<div class="row margin-top-30">
				<div class="col-sm-3 color-aqua">
					Carregar anexo:
				</div>
				<div class="col-sm-8">
					<span class="pull-left"></span> <input type="text" name="search" class="col-xs-12" placeholder="Buscar por nome ou cargo">
				</div>
				<div class="col-sm-1">
					<span class="glyphicon glyphicon-search color-red open-file cursor" aria-hidden="true"></span>
				</div>
				<div class="hide">
				<input type="file" id="file">
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
				<div class="col-sm-3 color-gray">Instruções: </div>
				<div class="col-sm-9">
					<div class="text-center color-gray background-color-lightgray padding-top-30 padding-bottom-30">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ornare commodo lorem vel accumsan. Nullam nec dolor ac augue vestibulum gravida. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam leo nunc, sodales eu augue ut, accumsan consequat orci. Morbi rutrum pharetra vehicula. Donec vel eleifend dolor. Praesent fringilla mattis nibh a venenatis. Donec et orci viverra, pharetra lectus nec, imperdiet leo. Aliquam commodo euismod ante sed laoreet. Fusce sagittis molestie ante, ut gravida ipsum pretium vehicula.
					</div>
				</div>

			</div>

		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('.title').text('Nova Ap');

		$('.open-file').click(function(event) {
			$('#file').click();
		});
	});
</script>