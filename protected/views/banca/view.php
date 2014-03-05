<?php
/* @var $this BancaController */
/* @var $model Banca */

$this->breadcrumbs=array(
	'Bancas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Banca', 'url'=>array('index')),
	array('label'=>'Create Banca', 'url'=>array('create')),
	array('label'=>'Update Banca', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Banca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Banca', 'url'=>array('admin')),
);
?>

<h1>View Banca #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'denumire',
		'filiala',
	),
)); ?>
