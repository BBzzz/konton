<?php
/**
 * This is the model class for table "tbl_client".
 */
class Client extends KontoActiveRecord
{
	public $strada;
	public $numar;
	public $bloc;
	public $scara;
	public $etaj;
	public $apartament;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('forma_de_org, denumire, cod_caen, categoria_de_venit, det_venit_net, nume, initiala_nume, prenume, cod_postal,adresa, data_inceput_activitate', 'required'),
			array('cui, denumire', 'unique'),			
			array('forma_de_org, categoria_de_venit, det_venit_net, cod_banca', 'numerical', 'integerOnly'=>true),
			array('denumire, email', 'length', 'max'=>256),
			array('cui', 'length', 'max'=>13),
			array('nr_reg_cc, nr_inreg_cm, valoare_capital_s', 'length', 'max'=>10),
			array('cod_caen', 'length', 'max'=>4),
			array('cod_cas', 'length', 'max'=>2),
			array('nume, prenume', 'length', 'max'=>75),
			array('initiala_nume', 'length', 'max'=>1),
			array('cod_postal', 'length', 'max'=>6),
			array('adresa', 'length', 'max'=>200),
			array('telefon, fax', 'length', 'max'=>15),
			array('cod_iban', 'length', 'max'=>24),
			array('data_reg_cc, data_inceput_activitate, data_incetare_activitate', 'type', 'type' => 'date', 'message' => '{attribute}: nu este o dată validă!', 'dateFormat' => 'yyyy-MM-dd'),
//			array('data_reg_cc, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, forma_de_org, denumire, cui, nr_reg_cc, data_reg_cc, nr_inreg_cm, cod_caen, cod_cas, valoare_capital_s, categoria_de_venit, det_venit_net, nume, initiala_nume, prenume, cod_postal, adresa, telefon, fax, email, cod_banca, cod_iban, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'cod_fog' => array(self::BELONGS_TO, 'CoduriUzuale', 'forma_de_org'),
			'cod_cdv' => array(self::BELONGS_TO, 'CoduriUzuale', 'categoria_de_venit'),
			'cod_dvn' => array(self::BELONGS_TO, 'CoduriUzuale', 'det_venit_net'),
			'cod_post' => array(self::BELONGS_TO,'CodPostal','_cod_postal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'forma_de_org' => 'Forma de organizare',
			'formadeorganizare' => 'Forma de organizare',
			'denumire' => 'Denumire',
			'cui' => 'CUI (Cod unic de identificare fiscală)',
			'nr_reg_cc' => 'Număr Registru la Camera Comerțului',
			'data_reg_cc' => 'Data Registru la Camera Comerțului',
			'nr_inreg_cm' => 'Număr înregistrare la Camera de Muncă',
			'cod_caen' => 'Cod CAEN',
			'cod_cas' => 'Cod Casa de Asigurări de Sănătate',
			'valoare_capital_s' => 'Valoare capital social',
			'categoria_de_venit' => 'Categoria de venit',
			'det_venit_net' => 'Determinare venit net',
			'nume' => 'Nume',
			'initiala_nume' => 'Inițiala Nume',
			'prenume' => 'Prenume',
			'cod_postal' => 'Cod poștal',
			'adresa' => 'Adresa',
			'numar' => 'Număr',
			'telefon' => 'Telefon',
			'fax' => 'Fax',
			'email' => 'E-mail',
			'cod_banca' => 'Cod Banca',
			'cod_iban' => 'Cod Iban',
			'data_inceput_activitate' => 'Data început activitate',
			'data_incetare_activitate' => 'Data încetare activitate',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('forma_de_org',$this->forma_de_org);
		$criteria->compare('denumire',$this->denumire,true);
		$criteria->compare('cui',$this->cui,true);
		$criteria->compare('nr_reg_cc',$this->nr_reg_cc,true);
		$criteria->compare('data_reg_cc',$this->data_reg_cc,true);
		$criteria->compare('nr_inreg_cm',$this->nr_inreg_cm,true);
		$criteria->compare('cod_caen',$this->cod_caen,true);
		$criteria->compare('cod_cas',$this->cod_cas,true);
		$criteria->compare('valoare_capital_s',$this->valoare_capital_s,true);
		$criteria->compare('categoria_de_venit',$this->categoria_de_venit);
		$criteria->compare('det_venit_net',$this->det_venit_net);
		$criteria->compare('nume',$this->nume,true);
		$criteria->compare('initiala_nume',$this->initiala_nume,true);
		$criteria->compare('prenume',$this->prenume,true);
		$criteria->compare('cod_postal',$this->cod_postal,true);
		$criteria->compare('adresa',$this->adresa,true);
		$criteria->compare('telefon',$this->telefon,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
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
	 * @return Client the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getOptions($type)
	{
		$codeDataProvider=new CActiveDataProvider('CoduriUzuale', array(	
													'criteria'=>array(
																				'condition'=>'tip_cod_u=:type_id',
																				'params'=>array(':type_id'=>$type),	
																			),
													));
		$optionsarray = CHtml::listData($codeDataProvider->getData(),'id', 'denumire');
		return $optionsarray;
	}
	
	public function getCoduriPostale()
	{
		$coduri_post = CodPostal::model()->findAll();
    $optionsarray = CHtml::listData($coduri_post, 'id', 'cod_postal');

		return $optionsarray;
	}

	public function getFormaDeOrganizare()
	{
		$cod = CoduriUzuale::model()->findByPk($this->forma_de_org);
		$forg = $cod->denumire;
		return $forg;
	}
	
	public function getNumele()
	{
		$numele = $this->nume." ".$this->prenume;
		return $numele;
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
