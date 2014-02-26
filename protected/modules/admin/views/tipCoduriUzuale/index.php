<?php
/* @var $this TipCoduriUzualeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tip Coduri Uzuales',
);

$this->menu=array(
	array('label'=>'Create TipCoduriUzuale', 'url'=>array('create')),
	array('label'=>'Manage TipCoduriUzuale', 'url'=>array('admin')),
);
?>

<h1>Tip Coduri Uzuales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
