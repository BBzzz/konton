<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'adresa_det',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Adresa detaliu',
        'autoOpen'=>true,
				'width' => '40%',
    ),
));
?>
<p>Vă rugăm să completați formularul următor cu datele de intrare:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'address-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Câmpurile denotate cu <span class="required">*</span> sunt obligatorii.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'_cod_postal'); ?>
		<?php echo $form->textField($model,'_cod_postal',array('size'=>6)); ?>
		<?php echo $form->error($model,'_cod_postal'); ?>
	</div>
<?php if ($model->_cod_postal)	{?>
	<div class="row">
		<?php echo $form->labelEx($model,'localitate'); ?>
		<?php echo $model->getLocalitateText($model->_cod_postal); ?>
	</div>
<?php }?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'strada'); ?>
		<?php echo $form->textField($model,'strada',array('size'=>30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'strada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numar'); ?>
		<?php echo $form->textField($model,'numar',array('size'=>5)); ?>
		<?php echo $form->error($model,'numar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bloc'); ?>
		<?php echo $form->textField($model,'bloc',array('size'=>5)); ?>
		<?php echo $form->error($model,'bloc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scara'); ?>
		<?php echo $form->textField($model,'scara',array('size'=>5)); ?>
		<?php echo $form->error($model,'scara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etaj'); ?>
		<?php echo $form->textField($model,'etaj',array('size'=>5)); ?>
		<?php echo $form->error($model,'etaj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apartament'); ?>
		<?php echo $form->textField($model,'apartament',array('size'=>5)); ?>
		<?php echo $form->error($model,'apartament'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvare'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
