<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Tipărire factura', 'url'=>array('index')),
	array('label'=>'Factură nouă', 'url'=>array('create')),
	array('label'=>'Modificare factura', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Șterge factura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrare facturi', 'url'=>array('admin')),
);
?>

<h1>Vizualizare factura <strong>#<?php echo $model->nr_doc.'/'.$this->formatRoDate($model->data_doc); ?></strong></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'partener.denumirefirma',
		array(
			'name' =>'data_doc',
			'value' => $this->formatRoDate($model->data_doc),
		),
		array(
			'name' =>'data_scad',
			'value' => $this->formatRoDate($model->data_scad),
			'visible'=> $this->checkVisible($model->data_scad)
		),
		'nr_doc',
		'valoare_doc',
	),
)); ?>
