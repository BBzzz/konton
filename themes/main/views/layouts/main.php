<?php 
if (Yii::app()->user->hasState("crtClient")) {
		$client = Client::model()->findByPk(Yii::app()->user->getState("crtClient"));
		$client_selectat = "<strong>[".$client->denumire."]</strong>";
}else $client_selectat = "";  
?>
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

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<header>
		<h1><?php echo CHtml::encode(Yii::app()->name).".".$client_selectat; ?></h1>
		<h2>Contabilitate simplă online</h2>
	</header>

	<nav>
		<?php
			$this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Intrare', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),				
					array('label'=>'Ieșire ('.Yii ::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
					array(
						'label'=>'Date client', 
						'url'=>array('/client/update/'.Yii::app()->user->getState("crtClient")), 
						'visible'=>Yii::app()->user->hasState("crtClient"),
					),
					array(
						'label'=>'Facturi', 
						'url'=>array('/factura/admin'), 
						'visible'=>Yii::app()->user->hasState("crtClient")
					),				
					array(
						'label'=>'Documente', 
						'url'=>array('/document/admin'), 
						'visible'=>Yii::app()->user->hasState("crtClient")
					),
					array(
						'label'=>'Parteneri', 
						'url'=>array('/partener/admin'), 
						'visible'=>Yii::app()->user->hasState("crtClient")
					),
					array(
						'label'=>'Bănci', 
						'url'=>array('/banca/admin'), 
						'visible'=>Yii::app()->user->hasState("crtClient")
					),				
					array('label'=>'Despre site', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Contact', 'url'=>array('/site/contact')),
					array('label'=>'Înregistrare', 'url'=>array('/utilizator/create'), 'visible'=>Yii::app()->user->isGuest),
				),
		)); ?>
	</nav>
<?php if (!Yii::app()->user->isGuest):?>
	<?php if( Yii::app()->authManager->checkAccess("contabil", Yii::app()->user->id) ):?>
	<nav>
		<?php	$this->widget('zii.widgets.CMenu',array(
				'items'=>array(
//					array('label'=>'Client: '.$client_selectat, 'url'=>array('/client/view/'.Yii::app()->user->getState("crtClient")), 'visible'=>$client_selectat,),
					array('label'=>'Clienți', 'url'=>array('/client/admin')),
					array('label'=>'Tipuri de documente', 'url'=>array('/tipDocumente/admin')),
			),
		)); ?>
	</nav>
	<?php endif?>
	<?php if( Yii::app()->authManager->checkAccess("administrator", Yii::app()->user->id) ):?>
	<nav>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Administrare site', 'url'=>array('/admin/utilizator/admin')),
			),
		)); ?>
	</nav>
	<?php endif?>
<?php endif?>
<!--	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>--><!-- breadcrumbs -->
<!--	<?php endif?>-->

	<?php echo $content; ?>

	<footer>
		&copy; <?php echo date('Y'); ?> Kontonline<br/>
		Toate drepturile rezervate.<br/>
		<?php echo Yii::powered(); ?>
	</footer>

</div><!-- page -->

</body>
</html>
