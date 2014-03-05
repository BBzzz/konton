<?php
/* @var $this BancaController */
/* @var $model Banca */

$this->breadcrumbs=array(
	'Bancas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listare bănci', 'url'=>array('index')),
	array('label'=>'Administrare bănci', 'url'=>array('admin')),
);
?>

<h1>Creare banca</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
