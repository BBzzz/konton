<?php
/* @var $this CodPostalController */
/* @var $model CodPostal */

$this->breadcrumbs=array(
	'Cod Postals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CodPostal', 'url'=>array('index')),
	array('label'=>'Manage CodPostal', 'url'=>array('admin')),
);
?>

<h1>Create CodPostal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>