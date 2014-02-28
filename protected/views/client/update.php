<?php
	$adresa = $model->adresa;
	$adresa_arr = explode (',',$adresa);
	foreach ($adresa_arr as $adr) {
		if (strpos($adr, 'str.') !== false)
			$model->strada = trim(substr($adr, strpos($adr, 'str.')+4, 100));
		if (strpos($adr, 'nr.') !== false)
			$model->numar = trim(substr($adr, strpos($adr, 'nr.')+3, 5));
		if (strpos($adr, 'bl.') !== false)
			$model->bloc = trim(substr($adr, strpos($adr, 'bl.')+3, 5));
		if (strpos($adr, 'sc.') !== false)
			$model->scara = trim(substr($adr, strpos($adr, 'sc.')+3, 5));
		if (strpos($adr, 'et.') !== false)
			$model->etaj = trim(substr($adr, strpos($adr, 'et.')+3, 5));
		if (strpos($adr, 'ap.') !== false)
			$model->apartament = trim(substr($adr, strpos($adr, 'ap.')+3, 5));		
	}

if ( Yii::app()->authManager->checkAccess("contabil", Yii::app()->user->id))
	$this->menu=array(
		array('label'=>'Creare client nou', 'url'=>array('create')),
		array('label'=>'Administrare clienți', 'url'=>array('admin')),
//		array('label'=>'Modificare adresa', 'url'=>array('site/zoomaddress', 'id'=>$model->id)),
	);
?>

<h1>Modificare client <strong><?php echo $model->denumire; ?><strong></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
