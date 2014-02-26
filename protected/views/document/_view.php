<?php
/* @var $this DocumentController */
/* @var $data Document */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_doc')); ?>:</b>
	<?php echo CHtml::encode($data->tip_doc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_doc')); ?>:</b>
	<?php echo CHtml::encode($data->data_doc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nr_doc')); ?>:</b>
	<?php echo CHtml::encode($data->nr_doc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fel_op')); ?>:</b>
	<?php echo CHtml::encode($data->fel_op); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valoare_doc')); ?>:</b>
	<?php echo CHtml::encode($data->valoare_doc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('loc_tranzactie')); ?>:</b>
	<?php echo CHtml::encode($data->loc_tranzactie); ?>
	<br />

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