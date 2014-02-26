<?php
/* @var $this TipCoduriUzualeController */
/* @var $model TipCoduriUzuale */

$this->breadcrumbs=array(
	'Tip Coduri Uzuales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipCoduriUzuale', 'url'=>array('index')),
	array('label'=>'Create TipCoduriUzuale', 'url'=>array('create')),
	array('label'=>'View TipCoduriUzuale', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipCoduriUzuale', 'url'=>array('admin')),
);
?>

<h1>Update TipCoduriUzuale <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>