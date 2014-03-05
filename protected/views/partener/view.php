<?php
/* @var $this PartenerController */
/* @var $model Partener */

$this->breadcrumbs=array(
	'Parteners'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Partener', 'url'=>array('index')),
	array('label'=>'Create Partener', 'url'=>array('create')),
	array('label'=>'Update Partener', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Partener', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Partener', 'url'=>array('admin')),
);
?>

<h1>View Partener #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'denumire',
		'cui',
		'cod_postal',
		'adresa',
		'cod_banca',
		'cod_iban',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
