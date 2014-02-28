<?php
/* @var $this TipDocumenteController */
/* @var $data TipDocumente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('denumire')); ?>:</b>
	<?php echo CHtml::encode($data->denumire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fel_op')); ?>:</b>
	<?php echo CHtml::encode($data->fel_op); ?>
	<br />


</div>