<?php
/* @var $this CodPostalController */
/* @var $model CodPostal */

$this->breadcrumbs=array(
	'Cod Postals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CodPostal', 'url'=>array('index')),
	array('label'=>'Create CodPostal', 'url'=>array('create')),
	array('label'=>'View CodPostal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CodPostal', 'url'=>array('admin')),
);
?>

<h1>Update CodPostal <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>