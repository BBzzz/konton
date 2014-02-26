<?php
/* @var $this CodPostalController */
/* @var $data CodPostal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_postal')); ?>:</b>
	<?php echo CHtml::encode($data->cod_postal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localitate')); ?>:</b>
	<?php echo CHtml::encode($data->localitate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('strada')); ?>:</b>
	<?php echo CHtml::encode($data->strada); ?>
	<br />


</div>