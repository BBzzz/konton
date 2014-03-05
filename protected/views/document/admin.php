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
			'type' => 'date',
		),
		'valoare_doc',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
