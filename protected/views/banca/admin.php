<?php
$this->menu=array(
	array('label'=>'Listare bănci', 'url'=>array('index')),
	array('label'=>'Creare banca', 'url'=>array('create')),
);
?>

<h1>Administrare bănci</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'banca-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'denumire',
		'filiala',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
