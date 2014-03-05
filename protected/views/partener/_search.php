<?php
/* @var $this PartenerController */
/* @var $model Partener */
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
		<?php echo $form->label($model,'denumire'); ?>
		<?php echo $form->textField($model,'denumire',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cui'); ?>
		<?php echo $form->textField($model,'cui',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_postal'); ?>
		<?php echo $form->textField($model,'cod_postal',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adresa'); ?>
		<?php echo $form->textField($model,'adresa',array('size'=>60,'maxlength'=>200)); ?>
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