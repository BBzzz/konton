<?php
/* @var $this CoduriUzualeController */
/* @var $model CoduriUzuale */

$this->breadcrumbs=array(
	'Coduri Uzuales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CoduriUzuale', 'url'=>array('index')),
	array('label'=>'Manage CoduriUzuale', 'url'=>array('admin')),
);
?>

<h1>Create CoduriUzuale</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>