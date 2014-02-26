<?php
/* @var $this CoduriUzualeController */
/* @var $data CoduriUzuale */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_cod_u')); ?>:</b>
	<?php echo CHtml::encode($data->tip_cod_u); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod')); ?>:</b>
	<?php echo CHtml::encode($data->cod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('denumire')); ?>:</b>
	<?php echo CHtml::encode($data->denumire); ?>
	<br />


</div>