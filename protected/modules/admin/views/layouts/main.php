<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ro" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<header>
		<h1>Administrare site Kontonline</h1>
	</header>

	<nav>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Înapoi la pagina principală', 'url'=>array('/site/index')),				
				array('label'=>'Ieșire ('.Yii ::app()->user->name.')', 'url'=>array('/site/logout')),
			),
		)); ?>
	</nav>
	<nav>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Utilizatori', 'url'=>array('/admin/utilizator/admin')),
				array('label'=>'Clienți', 'url'=>array('/admin/client/admin')),
			),
		)); ?>
	</nav>
	<nav>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Setări generale', 'url'=>array('/admin/coduriUzuale/admin')),
				array('label'=>'Tip coduri', 'url'=>array('/admin/tipCoduriUzuale/admin')),
				array('label'=>'Coduri poștale', 'url'=>array('/admin/codPostal/admin')),
			),
		)); ?>
	</nav>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<article>
	<?php echo $content; ?>
	</article>

	<footer>
		&copy; <?php echo date('Y'); ?> Kontonline<br/>
		Toate drepturile rezervate.<br/>
		<?php echo Yii::powered(); ?>
	</footer>

</div><!-- page -->

</body>
</html>
