<?php
/* @var $this TipDocumenteController */
/* @var $model TipDocumente */

$this->breadcrumbs=array(
	'Tip Documentes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipDocumente', 'url'=>array('index')),
	array('label'=>'Create TipDocumente', 'url'=>array('create')),
	array('label'=>'View TipDocumente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipDocumente', 'url'=>array('admin')),
);
?>

<h1>Update TipDocumente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>