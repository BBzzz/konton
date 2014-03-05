<?php
/* @var $this PartenerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parteners',
);

$this->menu=array(
	array('label'=>'Create Partener', 'url'=>array('create')),
	array('label'=>'Manage Partener', 'url'=>array('admin')),
);
?>

<h1>Parteners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
