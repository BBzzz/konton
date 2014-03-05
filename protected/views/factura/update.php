<?php
$this->menu=array(
	array('label'=>'Tipărire factura', 'url'=>array('index')),
	array('label'=>'Factură nouă', 'url'=>array('create')),
	array('label'=>'Vizualizare factura', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrare facturi', 'url'=>array('admin')),
);
?>

<h1>Modificare factura <strong>#<?php echo $model->nr_doc.'/'.$this->formatRoDate($model->data_doc); ?></strong></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
