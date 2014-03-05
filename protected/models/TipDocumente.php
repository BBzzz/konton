<?php

/**
 * This is the model class for table "tbl_tip_documente".
 *
 * The followings are the available columns in table 'tbl_tip_documente':
 * @property integer $id
 * @property string $denumire
 * @property integer $loc_tranzactie
 */
class TipDocumente extends CActiveRecord
{
	const CASA = 0;
	const BANCA = 1;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_tip_documente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('denumire, loc_tranzactie', 'required'),
			array('loc_tranzactie', 'numerical', 'integerOnly'=>true),
			array('denumire', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, denumire, loc_tranzactie', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'denumire' => 'Denumire',
			'loc_tranzactie' => 'Loc tranzacție',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('denumire',$this->denumire,true);
		$criteria->compare('loc_tranzactie',$this->loc_tranzactie);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipDocumente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getTipuriTranzactie()
	{
		return array(
			self::CASA => 'Casa',
			self::BANCA => 'Banca',
		);
	}

	public function getTipTranzactie()
	{
		$typeOptions=$this->TipuriTranzactie;
		return isset($typeOptions[$this->loc_tranzactie]) ? $typeOptions[$this->loc_tranzactie] : "";
	}
}
