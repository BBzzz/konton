<?php
if (Yii::app()->user->hasState("crtClient")) {
	$label = 'Deselectare client';
	$w_text = 'deselectați';
}else{
	$label = 'Selectare client';
	$w_text = 'selectați';
}

if ( Yii::app()->authManager->checkAccess("contabil", Yii::app()->user->id))
	$this->menu=array(
		array('label'=>$label, 'url'=>'#', 'linkOptions'=>array('submit'=>array('select','id'=>$model->id),'confirm'=>'Sunteți sigur că vreți să-l '.$w_text.' acest client?')),
		array('label'=>'Creare client nou', 'url'=>array('create')),
		array('label'=>'Modificare client', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Șterge client', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Sunteți sigur că vreți să-l ștergeți acest client?')),
		array('label'=>'Administrare clienți', 'url'=>array('admin')),
	);
?>

<h1>Vizualizare client <strong><?php echo $model->denumire; ?><strong></h1>

<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name' => 'forma_de_org',
			'value'=> CHtml::encode($model->cod_fog->denumire)
		),
		'denumire',
		'cui',
		'nr_reg_cc',
		array(
			'name' => 'data_reg_cc',
			'type' => 'date',
			'visible'=> $this->checkVisible($model->data_reg_cc)
		),
		'nr_inreg_cm',
		'cod_caen',
		'cod_cas',
		'valoare_capital_s',
		array(
			'name' => 'categoria_de_venit',
			'value'=> CHtml::encode($model->cod_cdv->denumire)
		),
		array(
			'name' => 'det_venit_net',
			'value'=> CHtml::encode($model->cod_dvn->denumire)
		),
		'nume',
		'initiala_nume',
		'prenume',
		'cod_postal',
		'adresa',
		'telefon',
		'fax',
		'email',
		'cod_banca',
		'cod_iban',
		array(
			'name' => 'data_inceput_activitate',
			'type' => 'date',
		),
		array(
			'name' => 'data_incetare_activitate',
			'type' => 'date',
			'visible'=> $this->checkVisible($model->data_incetare_activitate)
		),
	),
)); ?>
