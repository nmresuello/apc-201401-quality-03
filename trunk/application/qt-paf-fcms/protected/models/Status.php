<?php

/**
 * This is the model class for table "status".
 *
 * The followings are the available columns in table 'status':
 * @property integer $id
 * @property string $active_inactive
 * @property string $inactive_date
 * @property string $inactive_reason
 * @property integer $employee_id
 *
 * The followings are the available model relations:
 * @property Employee $employee
 */
class Status extends CActiveRecord
{
	
	const act='active';
	const inact='inactive';
	
	public function getStatus()
	{
		return array(
			self::act=>'Active',
			self::inact=>'Inactive',
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Status the static model class
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
		return 'status';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('active_inactive, employee_id', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('active_inactive', 'length', 'max'=>8),
			array('inactive_reason', 'length', 'max'=>100),
			array('inactive_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, active_inactive, inactive_date, inactive_reason, employee_id', 'safe', 'on'=>'search'),
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
			'employee' => array(self::BELONGS_TO, 'Employee', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'active_inactive' => 'Status',
			'inactive_date' => 'Inactive Date',
			'inactive_reason' => 'Reason',
			'employee_id' => 'Employee',
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
		$criteria->compare('active_inactive',$this->active_inactive,true);
		$criteria->compare('inactive_date',$this->inactive_date,true);
		$criteria->compare('inactive_reason',$this->inactive_reason,true);
		$criteria->compare('employee_id',$this->employee_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}