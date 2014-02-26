<?php
/* @var $this TipCoduriUzualeController */
/* @var $model TipCoduriUzuale */

$this->breadcrumbs=array(
	'Tip Coduri Uzuales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipCoduriUzuale', 'url'=>array('index')),
	array('label'=>'Create TipCoduriUzuale', 'url'=>array('create')),
	array('label'=>'Update TipCoduriUzuale', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipCoduriUzuale', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipCoduriUzuale', 'url'=>array('admin')),
);
?>

<h1>View TipCoduriUzuale #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'denumire',
	),
)); ?>
