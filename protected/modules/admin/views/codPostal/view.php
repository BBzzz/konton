<?php
/* @var $this CodPostalController */
/* @var $model CodPostal */

$this->breadcrumbs=array(
	'Cod Postals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CodPostal', 'url'=>array('index')),
	array('label'=>'Create CodPostal', 'url'=>array('create')),
	array('label'=>'Update CodPostal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CodPostal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CodPostal', 'url'=>array('admin')),
);
?>

<h1>View CodPostal #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cod_postal',
		'localitate',
		'strada',
	),
)); ?>
