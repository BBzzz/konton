<?php
/* @var $this ClientController */
/* @var $model Client */

/*$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);*/

$this->menu=array(
//	array('label'=>'List Client', 'url'=>array('index')),
	array('label'=>'Creare client nou', 'url'=>array('create')),
//	array('label'=>'View Client', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrare clienți', 'url'=>array('admin')),
);
?>

<h1>Modificare client <strong><?php echo $model->denumire; ?><strong></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
