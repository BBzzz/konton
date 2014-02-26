<?php

/**
 * This is the model class for table "tbl_document".
 *
 * The followings are the available columns in table 'tbl_document':
 * @property string $id
 * @property string $client_id
 * @property string $tip_doc
 * @property string $data_doc
 * @property string $nr_doc
 * @property integer $fel_op
 * @property string $valoare_doc
 * @property integer $loc_tranzactie
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 */
class Document extends KontoActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_document';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tip_doc, data_doc, nr_doc, fel_op, loc_tranzactie', 'required'),
			array('fel_op, loc_tranzactie, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('tip_doc', 'length', 'max'=>6),
			array('nr_doc, valoare_doc', 'length', 'max'=>10),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, client_id, tip_doc, data_doc, nr_doc, fel_op, valoare_doc, loc_tranzactie, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'client' => array(self::BELONGS_TO, 'Client', 'client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'client_id' => 'Client',
			'tip_doc' => 'Tip document',
			'data_doc' => 'Data document',
			'nr_doc' => 'Număr document',
			'fel_op' => 'Fel operație',
			'valoare_doc' => 'Valoare document',
			'loc_tranzactie' => 'Loc Tranzacție',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('client_id',$this->client_id,true);
		$criteria->compare('tip_doc',$this->tip_doc,true);
		$criteria->compare('data_doc',$this->data_doc,true);
		$criteria->compare('nr_doc',$this->nr_doc,true);
		$criteria->compare('fel_op',$this->fel_op);
		$criteria->compare('valoare_doc',$this->valoare_doc,true);
		$criteria->compare('loc_tranzactie',$this->loc_tranzactie);
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
	 * @return document the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
