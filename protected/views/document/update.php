<?php
/* @var $this DocumentController */
/* @var $model Document */

$this->menu=array(
	array('label'=>'Listare documente', 'url'=>array('index')),
	array('label'=>'Creare document', 'url'=>array('create')),
	array('label'=>'Vizualizare document', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrare Document', 'url'=>array('admin')),
);
?>

<h1>Modificare document #<?php echo $model->nr_doc.'/'.$this->formatRoDate($model->data_doc); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
