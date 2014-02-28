<?php
/* @var $this DocumentController */
/* @var $model Document */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'document-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Câmpurile denotate cu <span class="required">*</span> sunt obligatorii.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tip_doc'); ?>
		<?php echo $form->dropDownList($model,'tip_doc', $model->getTipuriDocumente()); ?>
		<?php echo $form->error($model,'tip_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_doc'); ?>
		<?php echo $form->textField($model,'data_doc',array('value'=>date("d.m.Y",strtotime('now')))); ?>
		<?php echo $form->error($model,'data_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nr_doc'); ?>
		<?php echo $form->textField($model,'nr_doc',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nr_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valoare_doc'); ?>
		<?php echo $form->textField($model,'valoare_doc',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'valoare_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loc_tranzactie'); ?>
	<?php echo $form->dropDownList($model,'loc_tranzactie', $model->getTipuriTranzactie()); ?>
		<?php echo $form->error($model,'loc_tranzactie'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Creare' : 'Salvare'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
