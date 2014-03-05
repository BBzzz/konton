<?php
$this->menu=array(
//	array('label'=>'Listare parteneri', 'url'=>array('index')),
	array('label'=>'Creare partener', 'url'=>array('create')),
);
?>

<h1>Administrare parteneri</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'partener-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'denumirefirma',
		'cui',
		'cod_postal',
		'adresa',
		'banca.denumire',
		'cod_iban',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
