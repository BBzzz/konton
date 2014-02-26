<?php
/* @var $this CodPostalController */
/* @var $model CodPostal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cod-postal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_postal'); ?>
		<?php echo $form->textField($model,'cod_postal',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cod_postal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localitate'); ?>
		<?php echo $form->textField($model,'localitate',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'localitate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'strada'); ?>
		<?php echo $form->textField($model,'strada',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'strada'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->