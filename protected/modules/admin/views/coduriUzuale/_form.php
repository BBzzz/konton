<?php
/* @var $this CoduriUzualeController */
/* @var $model CoduriUzuale */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'coduri-uzuale-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tip_cod_u'); ?>
		<?php echo (!$model->isNewRecord ? CHtml::encode($model->tipCodU->denumire) : $form->dropDownList($model,'tip_cod_u',$model->getCodOptions())); ?>
		<?php echo $form->error($model,'tip_cod_u'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod'); ?>
		<?php echo $form->textField($model,'cod'); ?>
		<?php echo $form->error($model,'cod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'denumire'); ?>
		<?php echo $form->textField($model,'denumire',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'denumire'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Creare' : 'Salvare'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
