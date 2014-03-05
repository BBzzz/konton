<?php
if (Yii::app()->user->getState('felDoc'))
	$fel = "primită";
else $fel = "emisă";

$this->menu=array(
	array('label'=>'Listare facturi', 'url'=>array('index')),
	array('label'=>'Administrare facturi', 'url'=>array('admin')),
);
?>

<h1>Creare factură <?php echo $fel?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
