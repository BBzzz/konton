<?php
/* @var $this BancaController */
/* @var $model Banca */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banca-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Câmpurile denotate cu <span class="required">*</span> sunt obligatorii.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'denumire'); ?>
		<?php echo $form->textField($model,'denumire',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'denumire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filiala'); ?>
		<?php echo $form->textField($model,'filiala',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'filiala'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Creare' : 'Salvare'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
