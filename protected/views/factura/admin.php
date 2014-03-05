<?php
$this->menu=array(
	array('label'=>'Listare facturi', 'url'=>array('index')),
//	array('label'=>'Creare factura '.$tip, 'url'=>array('create')),
);
?>

<h1>Administrare facturi</h1>

<?php 
	$this->widget('zii.widgets.jui.CJuiTabs',array(
    'tabs'=>array(
        'Facturi de încasat'=>array('ajax'=>$this->createAbsoluteUrl('Factura/facturi', array('fel'=>0))),
				'Facturi de plătit'=>array('ajax'=>$this->createAbsoluteUrl('Factura/facturi', array('fel'=>1))),
    ),
	));
?>
