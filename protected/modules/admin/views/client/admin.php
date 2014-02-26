<?php
/* @var $this ClientController */
/* @var $model Client */

/*$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Manage',
);*/

$this->menu=array(
//	array('label'=>'Listare clienți', 'url'=>array('index')),
	array('label'=>'Creare client nou', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#client-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrare clienți</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'client-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'user_id',
		'forma_de_org',
		'denumire',
		'cui',
		'nr_reg_cc',
		'data_reg_cc',
		'nr_inreg_cm',
/*		'cod_caen',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
