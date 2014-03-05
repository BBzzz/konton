<?php
/* @var $this BancaController */
/* @var $model Banca */

$this->breadcrumbs=array(
	'Bancas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Banca', 'url'=>array('index')),
	array('label'=>'Create Banca', 'url'=>array('create')),
	array('label'=>'View Banca', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Banca', 'url'=>array('admin')),
);
?>

<h1>Update Banca <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>