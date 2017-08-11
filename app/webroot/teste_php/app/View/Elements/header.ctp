<div class="container-fluid">
	<div class="row bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php echo $this->Html->image('logocolor.png', array('url' => array('controller' => 'pages', 'action' =>'display'), 'class' => 'logo')) ?>
				</div>	
				<div class="col-sm-9">
					<nav class="navbar navbar-default mt-35">
						<div class="container-fluid">
							<div class="row">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li>
											<?php echo $this->Html->link('Netflix Roulette', array('controller' => 'netflixroulettes', 'action' => 'index')) ?>
										</li>
										<li>
											<?php echo $this->Html->link('API RESTful', array('controller' => 'restfuls', 'action' => 'index')) ?>
										</li>

									</ul>
								</div><!-- /.navbar-collapse -->
							</div>
						</div><!-- /.container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>


