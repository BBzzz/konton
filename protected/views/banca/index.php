<?php
/* @var $this BancaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bancas',
);

$this->menu=array(
	array('label'=>'Create Banca', 'url'=>array('create')),
	array('label'=>'Manage Banca', 'url'=>array('admin')),
);
?>

<h1>Bancas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
