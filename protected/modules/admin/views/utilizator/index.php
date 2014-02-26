<?php
/* @var $this UtilizatorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Utilizators',
);

$this->menu=array(
	array('label'=>'Create Utilizator', 'url'=>array('create')),
	array('label'=>'Manage Utilizator', 'url'=>array('admin')),
);
?>

<h1>Utilizators</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
