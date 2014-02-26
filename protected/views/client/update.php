<?php
/* @var $this ClientController */
/* @var $model Client */

/*$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);*/
if ( Yii::app()->authManager->checkAccess("contabil", Yii::app()->user->id))
	$this->menu=array(
		array('label'=>'Creare client nou', 'url'=>array('create')),
		array('label'=>'Administrare clienți', 'url'=>array('admin')),
		array('label'=>'Modificare adresa', 'url'=>array('site/zoomaddress', 'id'=>$model->id)),
	);
?>

<h1>Modificare client <strong><?php echo $model->denumire; ?><strong></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
