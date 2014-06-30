<?php

/**
 * This is the model class for table "myaddress".
 *
 * The followings are the available columns in table 'myaddress':
 * @property integer $id
 * @property string $firstname
 * @property string $middle_name
 * @property string $lastname
 * @property string $gender
 * @property string $created_at
 */
class Myaddress extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Myaddress the static model class
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
		return 'myaddress';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, middle_name, lastname, gender, created_at', 'required'),
			array('firstname, middle_name, lastname', 'length', 'max'=>30),
			array('gender', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, firstname, middle_name, lastname, gender, created_at', 'safe', 'on'=>'search'),
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
			'firstname' => 'Firstname',
			'middle_name' => 'Middle Name',
			'lastname' => 'Lastname',
			'gender' => 'Gender',
			'created_at' => 'Created At',
			'home_address' => 'Home Address',
			'landline' => 'Landline',
			'cellphone' => 'Cellphone',
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
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('home_address',$this->created_at,true);
		$criteria->compare('landline',$this->created_at,true);
		$criteria->compare('cellphone',$this->created_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}