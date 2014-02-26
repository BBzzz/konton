<?php
/* @var $this ClientController */
/* @var $model Client */

/*$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Create',
);*/

/*$this->menu=array(
	array('label'=>'Listare Client', 'url'=>array('index')),
	array('label'=>'Manage Client', 'url'=>array('admin')),
);*/
?>

<h1>Creare client</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
