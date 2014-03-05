<?php
abstract class KontoActiveRecord extends CActiveRecord
{
/**
* Prepares create_time, create_user_id, update_time and update_user_id attributes before performing validation.
*/
	protected function beforeValidate()
	{
		if($this->isNewRecord) {
			// set the create date, last updated date and the user doing the creating
			$this->create_time=$this->update_time=new CDbExpression('NOW()');
			$this->create_user_id=$this->update_user_id=Yii::app()->user->id;
		}
		else {
			//not a new record, so just set the last updated time and last updated user id
			$this->update_time=new CDbExpression('NOW()');
			$this->update_user_id=Yii::app()->user->id;
		}
		return parent::beforeValidate();
	}
	
	public function getLocalitateText($cod_postal)
	{
		$codpostal = CodPostal::model()->find('cod_postal=:cod',array(':cod'=>$cod_postal));
		if (isset($codpostal))		
			$localitate = $codpostal->localitate;
		else $localitate = "Necunoscută";
		return $localitate;
	}

	public function getCoduriPostale()
	{
		$coduri_post = CodPostal::model()->findAll(array('order'=>'cod_postal'));
    $optionsarray = CHtml::listData($coduri_post, 'cod_postal', 'cod_postal');

		return $optionsarray;
	}

	public function getBanci()
	{
		$coduri_banca = Banca::model()->findAll(array('order'=>'denumire'));
    $optionsarray = CHtml::listData($coduri_banca, 'id', 'denumire');

		return $optionsarray;
	}
	
/*	public function getBancaClient($id)
	{
		Yii::trace('idxx: '.$id);
		$codbanca = Banca::model()->findByPk($id);
    if (isset($codbanca))		
			$banca = $codbanca->banca;
		else $banca = "Necunoscută";
		return $banca;
	}*/
}
