<?php
Yii::app()->clientScript->registerScript('adresa', "
$('.adresa-button').click(function(){
	$('.adresa-form').toggle();
	return false;
});
$('select#Client_cod_postal').change(function(){
	sel_val = $('select#Client_cod_postal option:selected').val();
	$.ajax({
		type: 'POST',
		url:'".$this->createUrl('Client/GetLocalitate')."',
		data:{cp:sel_val},
		dataType: 'json',
		success: function(data){
			$('#localitate').text(data.localitate);
			var stradaStr = data.strada.trim();
			var str_pos = stradaStr.toLowerCase().indexOf('strada');
			if (str_pos >= 0)
				stradaStr = stradaStr.substr(str_pos+6,stradaStr.length);
			var nr_pos = stradaStr.indexOf('nr.');
			if (nr_pos >= 0) {
				strada = stradaStr.substr(0,nr_pos);
				numar = stradaStr.substr(nr_pos+4,stradaStr.length);
			} else {
			strada = stradaStr;
			numar = '';
			}
			$('#Client_strada').val(strada.trim());
			$('#Client_numar').val(numar.trim());
		},
	})
	return false;
});",
CClientScript::POS_READY
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));
?>

	<p class="note">Câmpurile denotate cu <span class="required">*</span> sunt obligatorii.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_de_org'); ?>
		<?php echo $form->dropDownList($model,'forma_de_org',$model->getOptions(1),array('empty' => 'Selectează o formă de organizare')); ?>
		<?php echo $form->error($model,'forma_de_org'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'denumire'); ?>
		<?php echo $form->textField($model,'denumire',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'denumire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cui'); ?>
		<?php echo $form->textField($model,'cui',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'cui'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nr_reg_cc'); ?>
		<?php echo $form->textField($model,'nr_reg_cc',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nr_reg_cc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_reg_cc'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
						'model' => $model,
    				'attribute'=>'data_reg_cc',
						'language' => 'ro',
    				'options'=>array(
        			'showAnim'=>'fold',
    				),
    				'htmlOptions'=>array(
        			'style'=>'height:20px;'
    				),
					));
		?>
		<?php echo $form->error($model,'data_reg_cc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nr_inreg_cm'); ?>
		<?php echo $form->textField($model,'nr_inreg_cm',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nr_inreg_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_caen'); ?>
		<?php echo $form->textField($model,'cod_caen',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'cod_caen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valoare_capital_s'); ?>
		<?php echo $form->textField($model,'valoare_capital_s',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'valoare_capital_s'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_de_venit'); ?>
		<?php echo $form->dropDownList($model,'categoria_de_venit',$model->getOptions(2),array('empty' => 'Selectează o categorie de venit')); ?>
		<?php echo $form->error($model,'categoria_de_venit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'det_venit_net'); ?>
		<?php echo $form->dropDownList($model,'det_venit_net',$model->getOptions(3),array('empty' => 'Selectează forma determinării venitului')); ?>
		<?php echo $form->error($model,'det_venit_net'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nume'); ?>
		<?php echo $form->textField($model,'nume',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'nume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initiala_nume'); ?>
		<?php echo $form->textField($model,'initiala_nume',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'initiala_nume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prenume'); ?>
		<?php echo $form->textField($model,'prenume',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'prenume'); ?>
	</div>
	<?php echo CHtml::link('Dupa adresa/cod postal','#',array('class'=>'adresa-button')); ?>
	
	<div class="adresa-form" style="display:none;">
		<div class="row">
			<?php echo $form->labelEx($model,'adresa'); ?>
			<?php echo $form->textField($model,'adresa',array('size'=>60,'maxlength'=>200,'placeholder' =>'localitate, str.strada, nr.numar (ex: Miercurea Ciuc, str.Narciselor, nr.2)')); ?>
			<?php echo $form->error($model,'adresa'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'cod_postal'); ?>
			<?php echo $form->textField($model,'cod_postal',array('size'=>6)); ?>
			<?php echo $form->error($model,'cod_postal'); ?>
		</div>
	</div><!-- adresa-form -->

	<div class="adresa-form">
		<div class="row">
			<?php echo $form->labelEx($model,'cod_postal'); ?>
			<?php echo $form->dropDownList($model,'cod_postal',$model->getCoduriPostale(),array('prompt' => 'Selectează un cod poștal')); ?>
			<?php echo $form->error($model,'cod_postal'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'localitate'); ?>
			<?php echo $form->hiddenField($model,'localitate'); ?>
			<span id="localitate"><?php echo $model->getLocalitateText($model->cod_postal)?></span>
		</div>
	
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

	</div><!-- adresa-form -->

	<div class="row">
		<?php echo $form->labelEx($model,'telefon'); ?>
		<?php echo $form->textField($model,'telefon',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_banca'); ?>
		<?php echo $form->dropDownList($model,'cod_banca',$model->getBanci(),array('prompt' => 'Selectează o bancă')); ?>
		<?php echo $form->error($model,'cod_banca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_iban'); ?>
		<?php echo $form->textField($model,'cod_iban',array('size'=>24,'maxlength'=>24)); ?>
		<?php echo $form->error($model,'cod_iban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_inceput_activitate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
						'model' => $model,
    				'attribute'=>'data_inceput_activitate',
						'language' => 'ro',
    				'options'=>array(
        			'showAnim'=>'fold',
    				),
    				'htmlOptions'=>array(
        			'style'=>'height:20px;'
    				),
					));
		?>
		<?php echo $form->error($model,'data_inceput_activitate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_incetare_activitate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
						'model' => $model,
    				'attribute'=>'data_incetare_activitate',
						'language' => 'ro',
    				'options'=>array(
        			'showAnim'=>'fold',
    				),
    				'htmlOptions'=>array(
        			'style'=>'height:20px;'
    				),
					));
		?>
		<?php echo $form->error($model,'data_incetare_activitate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Creare' : 'Salvare'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
