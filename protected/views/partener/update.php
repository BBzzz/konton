<?php
$this->menu=array(
//	array('label'=>'List Partener', 'url'=>array('index')),
	array('label'=>'Creare partener', 'url'=>array('create')),
//	array('label'=>'View Partener', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrare parteneri', 'url'=>array('admin')),
);
?>

<h1>Modificare partener <strong><?php echo $model->denumire; ?></strong></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
