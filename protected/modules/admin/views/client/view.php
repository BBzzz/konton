<?php
/* @var $this ClientController */
/* @var $model Client */

/*$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->id,
);*/

$this->menu=array(
//	array('label'=>'Listare clienți', 'url'=>array('index')),
	array('label'=>'Creare client nou', 'url'=>array('create')),
	array('label'=>'Modificare client', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Șterge client', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrare clienți', 'url'=>array('admin')),
);
?>

<h1>Vizualizare client <strong><?php echo $model->denumire; ?><strong></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
//		'user_id',
		'forma_de_org',
		'denumire',
		'cui',
		'nr_reg_cc',
		'data_reg_cc',
		'nr_inreg_cm',
		'cod_caen',
		'cod_cas',
		'valoare_capital_s',
		'categoria_de_venit',
		'det_venit_net',
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
		'data_inceput_activitate',
		'data_incetare_activitate',
	),
)); ?>
