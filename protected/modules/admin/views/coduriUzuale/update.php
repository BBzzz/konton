<?php
/* @var $this CoduriUzualeController */
/* @var $model CoduriUzuale */

/*$this->breadcrumbs=array(
	'Coduri Uzuales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);*/

$this->menu=array(
	array('label'=>'List CoduriUzuale', 'url'=>array('index')),
	array('label'=>'Create CoduriUzuale', 'url'=>array('create')),
	array('label'=>'View CoduriUzuale', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CoduriUzuale', 'url'=>array('admin')),
);
?>

<h1>Update CoduriUzuale <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
