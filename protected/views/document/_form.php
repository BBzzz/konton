<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'document-form',
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
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
						'model' => $model,
    				'attribute'=>'data_doc',
    				'language' => 'ro',
						'value'=>date("d.m.Y",strtotime('now')),
    				'options'=>array(
        			'showAnim'=>'fold',
    				),
    				'htmlOptions'=>array(
        			'style'=>'height:20px;'
    				),
					));
		?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Creare' : 'Salvare'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
