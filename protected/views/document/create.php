<?php

$this->menu=array(
	array('label'=>'Listare documente', 'url'=>array('index')),
	array('label'=>'Administrare documente', 'url'=>array('admin')),
);
?>

<h1>Creare document nou</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
