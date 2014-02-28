<?php
/* @var $this TipDocumenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tip Documentes',
);

$this->menu=array(
	array('label'=>'Create TipDocumente', 'url'=>array('create')),
	array('label'=>'Manage TipDocumente', 'url'=>array('admin')),
);
?>

<h1>Tip Documentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
