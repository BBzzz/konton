<?php
/* @var $this TipDocumenteController */
/* @var $model TipDocumente */

$this->breadcrumbs=array(
	'Tip Documentes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipDocumente', 'url'=>array('index')),
	array('label'=>'Create TipDocumente', 'url'=>array('create')),
	array('label'=>'Update TipDocumente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipDocumente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipDocumente', 'url'=>array('admin')),
);
?>

<h1>Vizualizare tip document #<?php echo $model->denumire; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'denumire',
		'fel_op',
	),
)); ?>
