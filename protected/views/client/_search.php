<?php
/* @var $this ClientController */
/* @var $model Client */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_de_org'); ?>
		<?php echo $form->textField($model,'forma_de_org'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'denumire'); ?>
		<?php echo $form->textField($model,'denumire',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cui'); ?>
		<?php echo $form->textField($model,'cui',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nr_reg_cc'); ?>
		<?php echo $form->textField($model,'nr_reg_cc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_reg_cc'); ?>
		<?php echo $form->textField($model,'data_reg_cc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nr_inreg_cm'); ?>
		<?php echo $form->textField($model,'nr_inreg_cm',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_caen'); ?>
		<?php echo $form->textField($model,'cod_caen',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valoare_capital_s'); ?>
		<?php echo $form->textField($model,'valoare_capital_s',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria_de_venit'); ?>
		<?php echo $form->textField($model,'categoria_de_venit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'det_venit_net'); ?>
		<?php echo $form->textField($model,'det_venit_net'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nume'); ?>
		<?php echo $form->textField($model,'nume',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'initiala_nume'); ?>
		<?php echo $form->textField($model,'initiala_nume',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prenume'); ?>
		<?php echo $form->textField($model,'prenume',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_postal'); ?>
		<?php echo $form->textField($model,'cod_postal',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adresa'); ?>
		<?php echo $form->textField($model,'adresa',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefon'); ?>
		<?php echo $form->textField($model,'telefon',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_banca'); ?>
		<?php echo $form->textField($model,'cod_banca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_iban'); ?>
		<?php echo $form->textField($model,'cod_iban',array('size'=>24,'maxlength'=>24)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
