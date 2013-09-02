<?php

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo $title_for_layout; ?>
		-
		<?php echo Configure::read('Application.name'); ?>
	</title>
	<?php
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('application');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('scriptTop');
	?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php
	echo $this->Html->script('html5shiv');
	echo $this->Html->script('respond.min');
	?>

	<![endif]-->
</head>
<body>
<div class="container">
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle"
				        data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><?php
					echo h(Configure::read('Application.name'));
					?></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Home</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
</div>
<?php echo $this->fetch('scriptBottom'); ?>
<?php echo $this->Html->script('http://code.jquery.com/jquery.min.js'); ?>
<?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>
