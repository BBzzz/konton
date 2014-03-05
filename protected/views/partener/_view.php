<?php
/* @var $this PartenerController */
/* @var $data Partener */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('denumire')); ?>:</b>
	<?php echo CHtml::encode($data->denumire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cui')); ?>:</b>
	<?php echo CHtml::encode($data->cui); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_postal')); ?>:</b>
	<?php echo CHtml::encode($data->cod_postal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adresa')); ?>:</b>
	<?php echo CHtml::encode($data->adresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_banca')); ?>:</b>
	<?php echo CHtml::encode($data->cod_banca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_iban')); ?>:</b>
	<?php echo CHtml::encode($data->cod_iban); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>