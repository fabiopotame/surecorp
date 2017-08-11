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
				<div class="col-xs-12">
					<div class="col-xs-12 color-aqua font-size-16">
						<span class="glyphicon glyphicon-plus aria-hidden="true"></span> Adicionar nova pontuação
					</div>

					<div class="col-xs-12 margin-top-15">
						<table class="table">
							<tbody>
								<tr>
									<td class="col-xs-6">1 - Superintendência/Vice - Superintendência do Centro Paula Sousa</td>
									<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
									<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span></td>
									<td class="col-xs-1 text-center color-aqua">3,2</td>
								</tr>

								<tr>
									<td class="col-xs-6">2 - Coordenadoria do Polo EAD/td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center color-aqua">2,5</td>
									</tr>

									<tr>
										<td class="col-xs-6">3 - Vice Diretoria de unidade de ensino (Fatec)</td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center color-aqua">4,1</td>
									</tr>

									<tr>
										<td class="col-xs-6">4 - Intercâmbio cultural</td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center color-aqua">1</td>
									</tr>

									<tr>
										<td class="col-xs-6">5 - Coordenador de implantação de unidade</td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center color-aqua">3,24</td>
									</tr>

									<tr>
										<td class="col-xs-6">6 - Exercícios como profissional liberal na área de disciplina ministrada</td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center color-aqua">3,24</td>
									</tr>

									<tr>
										<td class="col-xs-6">7 - Chefia ou gerência em área de disciplina, com aprovação da empresa</td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center"><span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span></td>
										<td class="col-xs-1 text-center color-aqua">3,24</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-xs-12 margin-top-15">
							<div class="row">
								<div class="col-sm-5">
									<label for="p1">Insira o nome da nova pontuação</label>
									<input type="text" id="p1" name="" class="col-xs-12">
								</div>
								<div class="col-sm-5">
									<label for="p2">Insira a quantia da nova pontuação</label>
									<input type="text" id="p2" name="" class="col-xs-12">
								</div>
								<div class="col-sm-2 padding-top-22">
									<button type="button" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove color-red" aria-hidden="true"></span></button>
									<button type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></button>
								</div>
							</div>

							<div class="row margin-top-10">
								<div class="col-xs-12">
								<label for="p2">Instruções: </label> <br>
									<textarea id="p2" class="col-xs-11"></textarea>

								</div>
							</div>

						</div>

					</div>


				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.title').text('Carregar Pontuação');
		});
	</script>