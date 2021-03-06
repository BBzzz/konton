<?php

/**
 * This is the model class for table "tbl_utilizator".
 *
 * The followings are the available columns in table 'tbl_utilizator':
 * @property integer $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $last_login_time
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 */
class Utilizator extends KontoActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Utilizator the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_utilizator';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, username', 'required'),
			array('user_role', 'safe'),
			array('email, username', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, email, username, last_login_time, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
			array('email, username', 'unique'),
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
			'username' => 'Nume utilizator',
			'user_role' => 'Tip utilizator',
			'last_login_time' => 'Last Login Time',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
		/**
	* creates an association between the user and the user's role within the application
	*/
	public function associateUserToRole($role, $userId)
	{
		$this->removeUserFromAuth($userId);
		$sql = "INSERT INTO AuthAssignment (itemname, userid) VALUES (:role, :userId)";
		$command = Yii::app()->db->createCommand($sql);
		$command->bindValue(":role", $role, PDO::PARAM_INT);
		$command->bindValue(":userId", $userId, PDO::PARAM_INT);
		return $command->execute();
	}
	/**
	* removes an association between the project, the user and theuser's role within the project
*/
	public function removeUserFromAuth($userId)
	{
		$sql = "DELETE FROM AuthAssignment WHERE userid=:userId";
		$command = Yii::app()->db->createCommand($sql);
		$command->bindValue(":userId", $userId, PDO::PARAM_INT);
		return $command->execute();
	}
	/**
	* Returns an array of available roles in which a user can be placed when being added to a project
	*/
	public static function getUserRoleOptions()
	{
		return CHtml::listData(Yii::app()->authManager->getRoles(),'name', 'name');
	}

	public function getUserRole()
	{
		$arrayAuthRoleItems = Yii::app()->authManager->getRoles($this->id);
		$arrayKeys = array_keys($arrayAuthRoleItems);
		$role = strtolower ($arrayKeys[0]);
		return $role;
	}
}
