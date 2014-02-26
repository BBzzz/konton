<?php
/* @var $this CoduriUzualeController */
/* @var $model CoduriUzuale */

$this->breadcrumbs=array(
	'Coduri Uzuales'=>array('index'),
	$model->id,
);

$this->menu=array(
//	array('label'=>'List CoduriUzuale', 'url'=>array('index')),
	array('label'=>'Create CoduriUzuale', 'url'=>array('create')),
//	array('label'=>'Update CoduriUzuale', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CoduriUzuale', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CoduriUzuale', 'url'=>array('admin')),
);
?>

<h1>View CoduriUzuale #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name' => 'tip_cod_u',
			'value' => CHtml::encode($model->tipCodU->denumire),
		),
		'cod',
		'denumire',
	),
)); ?>
