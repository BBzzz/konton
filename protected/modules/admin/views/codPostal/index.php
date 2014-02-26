<?php
/* @var $this CodPostalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cod Postals',
);

$this->menu=array(
	array('label'=>'Create CodPostal', 'url'=>array('create')),
	array('label'=>'Manage CodPostal', 'url'=>array('admin')),
);
?>

<h1>Cod Postals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
