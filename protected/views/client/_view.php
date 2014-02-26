<?php
/* @var $this ClientController */
/* @var $data Client */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_de_org')); ?>:</b>
	<?php echo CHtml::encode($data->forma_de_org); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('denumire')); ?>:</b>
	<?php echo CHtml::encode($data->denumire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cui')); ?>:</b>
	<?php echo CHtml::encode($data->cui); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nr_reg_cc')); ?>:</b>
	<?php echo CHtml::encode($data->nr_reg_cc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_reg_cc')); ?>:</b>
	<?php echo CHtml::encode($data->data_reg_cc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nr_inreg_cm')); ?>:</b>
	<?php echo CHtml::encode($data->nr_inreg_cm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_caen')); ?>:</b>
	<?php echo CHtml::encode($data->cod_caen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_cas')); ?>:</b>
	<?php echo CHtml::encode($data->cod_cas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valoare_capital_s')); ?>:</b>
	<?php echo CHtml::encode($data->valoare_capital_s); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_de_venit')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_de_venit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('det_venit_net')); ?>:</b>
	<?php echo CHtml::encode($data->det_venit_net); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nume')); ?>:</b>
	<?php echo CHtml::encode($data->nume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initiala_nume')); ?>:</b>
	<?php echo CHtml::encode($data->initiala_nume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prenume')); ?>:</b>
	<?php echo CHtml::encode($data->prenume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_postal')); ?>:</b>
	<?php echo CHtml::encode($data->cod_postal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adresa')); ?>:</b>
	<?php echo CHtml::encode($data->adresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefon')); ?>:</b>
	<?php echo CHtml::encode($data->telefon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_banca')); ?>:</b>
	<?php echo CHtml::encode($data->cod_banca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_iban')); ?>:</b>
	<?php echo CHtml::encode($data->cod_iban); ?>
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