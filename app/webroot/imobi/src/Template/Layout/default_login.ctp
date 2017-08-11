<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $title_for_layout; ?> :: Imobi
	</title>
	<?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('bootstrap-theme.min') ?>
    <?= $this->Html->css('font-awesome/css/font-awesome.min') ?>
    <?= $this->Html->css('plugins/morris/morris-0.4.3.min') ?>
    <?= $this->Html->css('plugins/timeline/timeline') ?>
    <?= $this->Html->css('sb-admin') ?>
    <?= $this->Html->css('potistrap.min') ?>
    <?= $this->Html->css('style') ?>

    <script type="text/javascript">
        var webroot = '<?= $this->request->webroot; ?>';
    </script> 

    <?= $this->Html->script('jquery-3.1.1.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('jquery.mask.min') ?>
    <?= $this->Html->script('plugins/metisMenu/jquery.metisMenu') ?>
    <?= $this->Html->script('plugins/morris/raphael-2.1.0.min') ?>
    <?= $this->Html->script('plugins/morris/morris') ?>
    <?= $this->Html->script('sb-admin') ?>
    <?= $this->Html->script('bootstrap-show-password.min') ?>
    <?= $this->Html->script('script') ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
</head>
<body class="background-login"> 
	<div id="content">
		<?= $this->Flash->render() ?>
		<?= $this->fetch('content') ?>
	</div>
</body>
</html>
