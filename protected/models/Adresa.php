<?php

class Adresa extends CFormModel
{
	public $_cod_postal;		
	public $localitate;	
	public $strada;
	public $numar;
	public $bloc;
	public $scara;
	public $etaj;
	public $apartament;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('_cod_postal, strada, numar', 'required'),
			array('_cod_postal', 'length', 'max'=>6),
			array('strada', 'length', 'max'=>100),
			array('numar', 'length', 'max'=>5),
			array('bloc', 'length', 'max'=>5),
			array('scara', 'length', 'max'=>5),
			array('etaj', 'length', 'max'=>5),
			array('apartament', 'length', 'max'=>5),
			array('strada, numar, bloc, scara, etaj, apartament', 'safe'),
		);
	}

	public function relations()
	{
		return array(
			'cod_post' => array(self::BELONGS_TO,'CodPostal','_cod_postal'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'_cod_postal' => 'Cod poștal',
			'localitate' => 'Localitate',
			'strada' =>	'Strada',
			'numar' => 'Număr',
			'bloc' => 'Bloc',
			'scara' => 'Scara',
			'etaj' => 'Etaj',
			'apartament' => 'Apartament',
		);
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getLocalitateText($cod_postal)
	{
		$codpostal = CodPostal::model()->find('cod_postal=:cod',array(':cod'=>$cod_postal));
		if (isset($codpostal))		
			$localitate = $codpostal->localitate;
		else $localitate = "Necunoscută";
		return $localitate;
	}
}
