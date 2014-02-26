<?php
/* @var $this UtilizatorController */
/* @var $model Utilizator */

/*$this->breadcrumbs=array(
	'Utilizators'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Utilizator', 'url'=>array('index')),
	array('label'=>'Manage Utilizator', 'url'=>array('admin')),
);*/
?>

<h1>Înregistrare utilizator</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
