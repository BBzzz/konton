<?php

/**
 * This is the model class for table "tbl_partener".
 *
 * The followings are the available columns in table 'tbl_partener':
 * @property integer $id
 * @property string $denumire
 * @property string $cui
 * @property string $cod_postal
 * @property string $adresa
 * @property integer $cod_banca
 * @property string $cod_iban
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 */
class Partener extends KontoActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_partener';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('denumire, cui, cod_postal, adresa', 'required'),
			array('cod_banca, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('denumire', 'length', 'max'=>256),
			array('prefix, postfix', 'length', 'max'=>10),
			array('cui', 'length', 'max'=>13),
			array('cod_postal', 'length', 'max'=>6),
			array('adresa', 'length', 'max'=>200),
			array('cod_iban', 'length', 'min'=>24, 'max'=>24),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, denumire, cui, cod_postal, adresa, cod_banca, cod_iban, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'cod_post' => array(self::BELONGS_TO,'CodPostal','cod_postal'),
			'banca' => array(self::BELONGS_TO,'Banca','cod_banca'),
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
			'denumirefirma' => 'Denumire firmă',
			'cui' => 'Cod Unic de Înregistrare',
			'cod_postal' => 'Cod Postal',
			'adresa' => 'Adresa',
			'cod_banca' => 'Banca',
			'cod_iban' => 'Cod Iban',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
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
		$criteria->compare('cui',$this->cui,true);
		$criteria->compare('cod_postal',$this->cod_postal,true);
		$criteria->compare('adresa',$this->adresa,true);
		$criteria->compare('cod_banca',$this->cod_banca);
		$criteria->compare('cod_iban',$this->cod_iban,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Partener the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getDenumireFirma()
	{
		$numele = $this->prefix." ".$this->denumire." ".$this->postfix;
		return $numele;
	}
}
