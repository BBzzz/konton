<?php
/* @var $this CoduriUzualeController */
/* @var $model CoduriUzuale */

/*$this->breadcrumbs=array(
	'Coduri Uzuales'=>array('index'),
	'Manage',
);*/

$this->menu=array(
//	array('label'=>'List CoduriUzuale', 'url'=>array('index')),
	array('label'=>'Creare CoduriUzuale', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#coduri-uzuale-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
$rawData = $model->search();
$dataProvider=new CActiveDataProvider('CoduriUzuale', array(
  'sort'=>array(
    'defaultOrder'=>'tip_cod_u,cod ASC',
  )
));
?>

<h1>Manage Coduri Uzuale</h1>

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
	'id'=>'coduri-uzuale-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'enableSorting' => true,
	'columns'=>array(
		'id',
		'tip_cod_u',
		'tipCodU.denumire',
/*		array(
			'name' => 'tip_cod_u',
			'value' => CHtml::encode($model->tipCodU->denumire),
		),*/
		'cod',
		'denumire',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
