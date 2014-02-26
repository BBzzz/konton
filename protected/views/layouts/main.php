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
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</header>

	<nav>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
//				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Intrare', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),				
				array('label'=>'Ieșire ('.Yii ::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Despre site', 'url'=>array('/site/index')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Înregistrare', 'url'=>array('/utilizator/create'), 'visible'=>Yii::app()->user->isGuest),
			),
		)); ?>
	</nav><!-- mainmenu -->
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
