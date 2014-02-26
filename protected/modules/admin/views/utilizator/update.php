<?php
/* @var $this UtilizatorController */
/* @var $model Utilizator */

/*$this->breadcrumbs=array(
	'Utilizators'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Utilizator', 'url'=>array('index')),
	array('label'=>'Create Utilizator', 'url'=>array('create')),
	array('label'=>'View Utilizator', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Utilizator', 'url'=>array('admin')),
);*/
?>

<h1>Modificare date utilizator <strong><?php echo $model->username; ?></strong></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
