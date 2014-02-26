<?php
/* @var $this CoduriUzualeController */
/* @var $model CoduriUzuale */
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
		<?php echo $form->label($model,'tip_cod_u'); ?>
		<?php echo $form->textField($model,'tip_cod_u'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod'); ?>
		<?php echo $form->textField($model,'cod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'denumire'); ?>
		<?php echo $form->textField($model,'denumire',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->