<?php
/* @var $this DocumentController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Creare document nou', 'url'=>array('create')),
	array('label'=>'Administrare documente', 'url'=>array('admin')),
);
?>

<h1>Listare documente</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
