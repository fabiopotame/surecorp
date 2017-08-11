<div class="container">
	<form id="form" action="#">
		<div class="row margin-top-30">
			<div class="col-sm-4">
				<?php echo $this->Html->image('flixroulette.png', array('class' => 'flixr img-responsive')) ?>
			</div>
			<div class="col-sm-8">
				<div class="row">
					<div class="col-xs-12">
						<h3>Sortear um filme no NETFLIX</h3>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 form-group">
						<label for="genre">Gênero:</label>
						<select class="form-control" id="genre" name="genre">
							<option value="All">Todos</option>
							<option value="Action &amp; Adventure">Ação e aventura</option>
							<option value="Anime">Anime</option>
							<option value="Comedies">Comédia</option>
							<option value="Documentaries">Documentário</option>
							<option value="Dramas">Drama</option>
							<option value="Faith and Spirituality">Espiritual</option>
							<option value="Sports Movies">Esportes</option>
							<option value="Children &amp; Family Movies">Família e crianças</option>
							<option value="Classic Movies">Filmes cássicos</option>
							<option value="Sci-Fi &amp; Fantasy">Filmes de ficção e fantasia</option>
							<option value="Foreign Movies">Filmes estrangeiros</option>
							<option value="Independent Movies">Filmes independentes</option>
							<option value="Thrillers">Filmes tristes</option>
							<option value="Gay &amp; Lesbian Movies">GLBT</option>
							<option value="Romantic Movies">Romance</option>
							<option value="TV Shows">Shows para TV</option>
							<option value="Horror Movies">Terror</option>
							<option value="Oscar-winning Movies">Vencedores do Oscar</option>
						</select>
					</div>
					<div class="col-xs-4 form-group padding-top-30">
						<input type="checkbox" name="movies" id="showmovies" value="true" checked> <label for="showmovies">Filmes</label> &nbsp;&nbsp;&nbsp;
						<input type="checkbox" name="tv" id="showtv" value="true" checked> <label for="showtv">Séries</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 form-group">
						<label>Resultados com avaliação entre:</label>
						<select class="form-control w-inherit" id="lowrating" name="lowrating">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
						<span class="span-adjust">a</span>
						<select class="form-control w-inherit" id="highrating" name="highrating">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5" selected>5</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Filtrados por:</label>
					</div>
					<div class="col-xs-4 form-group">
						<input type="text" name="director" id="director" placeholder="Nome do diretor" class="form-control">
					</div>
					<div class="col-xs-4 form-group">
						<input type="text" name="actor" id="actor" placeholder="Nome do ator" class="form-control">
					</div>
					<div class="col-xs-4 form-group">
						<input type="text" name="keyword" id="keyword" placeholder="Palavra-chave" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button class="btn btn-success search">Buscar</button>
						<button type="button" class="btn btn-danger">Limpar</button>
					</div>
				</div>

			</div>
		</div>
	</form>

	<div class="row margin-top-30 retorno">
		<div class="col-sm-3">
			<?php echo $this->Html->image('no_image.png', array('class' =>  'img-responsive img-rounded image')) ?>
		</div>	
		<div class="col-sm-9">
			<dir class="row">
				<div class="col-xs-12">
					<span class="title font-size-22">
						Aberration(1997)
					</span>
				</div>
				<div class="col-xs-12 margin-top-15">
					<span class="score">
						Netflix Rating: 2.9
					</span>
				</div>
				<div class="col-xs-12 margin-top-15">
					<span class="sipnose">
						After stealing a fortune from the Russian mob, Alex Langdon tries to hide out in a remote cabin but discovers that the area is home to a dangerous species of mutant lizards that have developed a taste for human flesh.
					</span>
				</div>
				<div class="col-xs-12 margin-top-15">
					<span class="director">
						Director: Tim Boxell
					</span>
				</div>
				<div class="col-xs-12 margin-top-15">
					<span class="cast">
						Cast: Pamela Gidley, Simon Bossell, Valeri Nikolayev, Helen Moulder, Noman Forsey
					</span>
				</div>
				<div class="col-xs-12 margin-top-15">
					<span class="">
						<?php echo $this->Html->link('Assistir no Netflix', '#', array('class' => 'btn btn-danger link-netflix', 'target' => '_blank')); ?>
					</span>
				</div>
			</dir>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h3>Nenhum filme foi localizado</h3>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>

<?php echo $this->Html->script('netflixroulettes'); ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#form').submit(function(event) {
			event.preventDefault();
			var options = {};
			var data = $(this).serializeArray();
			$.each(data, function(index, val) {
				if(val.value != '' && val.value != undefined) {
					if(val.value == 'true') { val.value = true; }
					options[val.name] = val.value;
				}
			});
			console.log(options);
			netflixroulette.createRequest(options, function(resp) {});
		});
	});
</script>