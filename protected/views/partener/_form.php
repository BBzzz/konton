<?php
Yii::app()->clientScript->registerScript('adresa', "
$('select#Partener_cod_postal').change(function(){
	sel_val = $('select#Partener_cod_postal option:selected').val();
	$.ajax({
		type: 'POST',
		url:'".$this->createUrl('Client/GetLocalitate')."',
		data:{cp:sel_val},
		dataType: 'json',
		success: function(data){
			var localitate = data.localitate;
			var stradaStr = data.strada.trim();
			var str_pos = stradaStr.toLowerCase().indexOf('strada');
			if (str_pos >= 0)
				stradaStr = stradaStr.substr(str_pos+6,stradaStr.length);
			adresa = localitate+', str.'+stradaStr;
			$('#Partener_adresa').val(adresa.trim());
		},
	})
	return false;
});",
CClientScript::POS_READY
);
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partener-form',
	'enableClientValidation'=>true,
)); ?>

	<p class="note">Câmpurile denotate cu <span class="required">*</span> sunt obligatorii.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'prefix'); ?>
		<?php echo $form->textField($model,'prefix',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'prefix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'denumire'); ?>
		<?php echo $form->textField($model,'denumire',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'denumire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postfix'); ?>
		<?php echo $form->textField($model,'postfix',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'postfix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cui'); ?>
		<?php echo $form->textField($model,'cui',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'cui'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_postal'); ?>
		<?php echo $form->dropDownList($model,'cod_postal',$model->getCoduriPostale(),array('prompt' => 'Selectează un cod poștal')); ?>
		<?php echo $form->error($model,'cod_postal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adresa'); ?>
		<?php echo $form->textField($model,'adresa',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'adresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_banca'); ?>
		<?php echo $form->dropDownList($model,'cod_banca',$model->getBanci(),array('prompt' => 'Selectează o bancă')); ?>
		<?php echo $form->error($model,'cod_banca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_iban'); ?>
		<?php echo $form->textField($model,'cod_iban',array('size'=>24, 'maxlength'=>24)); ?>
		<?php echo $form->error($model,'cod_iban'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Creare' : 'Salvare'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
