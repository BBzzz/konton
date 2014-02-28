<?php
$this->menu=array(
	array('label'=>'Listare documente', 'url'=>array('index')),
	array('label'=>'Creare document nou', 'url'=>array('create')),
);
?>

<h1>Administrare documente</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'document-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		array(
			'name' =>'tip_doc',
			'value' => '($data->tip_doc == 0) ? "" : $data->tipdoc->denumire',
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
		'update_user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
