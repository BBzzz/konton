<?php
/* @var $this DocumentController */
/* @var $model Document */

$this->breadcrumbs=array(
	'Documents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Document', 'url'=>array('index')),
	array('label'=>'Create Document', 'url'=>array('create')),
	array('label'=>'Update Document', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Document', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Document', 'url'=>array('admin')),
);
?>

<h1>Vizualizare document #<?php echo $model->nr_doc.'/'.$this->formatRoDate($model->data_doc); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
/*		'id',
		'client_id',*/
		'tip_doc',
		array(
			'name' =>'data_doc',
			'value' => $this->formatRoDate($model->data_doc),
		),
		'nr_doc',
		'fel_op',
		'valoare_doc',
		'loc_tranzactie',
/*		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',*/
	),
)); ?>
