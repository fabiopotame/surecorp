<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	<?php echo $title_for_layout ?>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('http://fonts.googleapis.com/css?family=Signika:300,400,600,700');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('jquery.nouislider.min');
		echo $this->Html->css('animate');
		echo $this->Html->css('style');
		echo $this->Html->css('main');

		echo $this->Html->script('jquery');
		echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=false');
		echo $this->Html->script('jquery.nouislider.all.min');
		echo $this->Html->script('smoothscroll');
		echo $this->Html->script('parallax');
		echo $this->Html->script('functions');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php echo $this->element('header'); ?>
		</div>
		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->element('footer'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->element('popups'); ?>
</body>
</html>
