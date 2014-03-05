<?php
/* @var $this BancaController */
/* @var $data Banca */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('denumire')); ?>:</b>
	<?php echo CHtml::encode($data->denumire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filiala')); ?>:</b>
	<?php echo CHtml::encode($data->filiala); ?>
	<br />


</div>