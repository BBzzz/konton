<?php
/* @var $this PartenerController */
/* @var $model Partener */

$this->breadcrumbs=array(
	'Parteners'=>array('index'),
	'Create',
);

$this->menu=array(
//	array('label'=>'Listare parteneri', 'url'=>array('index')),
	array('label'=>'Administrare parteneri', 'url'=>array('admin')),
);
?>

<h1>Creare partener</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
