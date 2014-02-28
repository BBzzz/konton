<?php
/* @var $this TipDocumenteController */
/* @var $model TipDocumente */

$this->menu=array(
	array('label'=>'Administrare tipuri de documente', 'url'=>array('admin')),
);
?>

<h1>Creare tipuri de documente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
