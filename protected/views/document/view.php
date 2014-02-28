<?php
/* @var $this DocumentController */
/* @var $model Document */

$this->breadcrumbs=array(
	'Documents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listare documente', 'url'=>array('index')),
	array('label'=>'Creare document', 'url'=>array('create')),
	array('label'=>'Modificare Document', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Ștergere document', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrare Document', 'url'=>array('admin')),
);
?>

<h1>Vizualizare document #<?php echo $model->nr_doc.'/'.$this->formatRoDate($model->data_doc); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
/*		'id',
		'client_id',*/
		array(
			'name' =>'tip_doc',
			'value' => CHtml::encode($model->tipdoc->denumire),
		),
		'nr_doc',
		array(
			'name' =>'data_doc',
			'value' => $this->formatRoDate($model->data_doc),
		),
		'valoare_doc',
		'tiptranzactie',
/*		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',*/
	),
)); ?>
