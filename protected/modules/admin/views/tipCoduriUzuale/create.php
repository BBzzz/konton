<?php
/* @var $this TipCoduriUzualeController */
/* @var $model TipCoduriUzuale */

$this->breadcrumbs=array(
	'Tip Coduri Uzuales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipCoduriUzuale', 'url'=>array('index')),
	array('label'=>'Manage TipCoduriUzuale', 'url'=>array('admin')),
);
?>

<h1>Create TipCoduriUzuale</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>