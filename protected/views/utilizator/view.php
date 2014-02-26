<?php
/* @var $this UtilizatorController */
/* @var $model Utilizator */

/*$this->breadcrumbs=array(
	'Utilizators'=>array('index'),
	$model->id,
);*/

$this->menu=array(
//	array('label'=>'List Utilizator', 'url'=>array('index')),
//	array('label'=>'Create Utilizator', 'url'=>array('create')),
	array('label'=>'Update Utilizator', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Utilizator', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Utilizator', 'url'=>array('admin')),
);
?>

<h1>Vizualizare Utilizator <strong><?php echo $model->username; ?></strong></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'email',
		'username',
/*		'password',
		'last_login_time',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	*/),
)); ?>
