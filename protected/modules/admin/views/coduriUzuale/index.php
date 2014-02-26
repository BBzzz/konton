<?php
/* @var $this CoduriUzualeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coduri Uzuales',
);

$this->menu=array(
	array('label'=>'Create CoduriUzuale', 'url'=>array('create')),
	array('label'=>'Manage CoduriUzuale', 'url'=>array('admin')),
);
?>

<h1>Coduri Uzuales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
