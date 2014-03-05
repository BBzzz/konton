<?php
if ($fel)
	$fel_txt = "primită";
else $fel_txt = "emisă";
echo CHtml::link('Creare factură '.$fel_txt,array('create')); ?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'factura-grid',
		'dataProvider' => $dataProvider,
		'enableSorting' => true,
		'columns'=>array(
			'partener.denumirefirma',
			array(
					'name' =>'data_doc',
					'type' => 'date',
				),
			'nr_doc',
			'valoare_doc',
			array(
					'name' =>'data_scad',
					'type' => 'date',
				),
			array(
				'class'=>'CButtonColumn',
			),
		),
));
