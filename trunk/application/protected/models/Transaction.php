<?php

/**
 * This is the model class for table "transaction".
 *
 * The followings are the available columns in table 'transaction':
 * @property integer $id
 * @property string $number
 * @property integer $employee_id
 * @property integer $particular_id
 * @property string $status
 * @property string $date_received
 * @property string $date_submitted
 * @property string $period_from
 * @property string $period_to
 * @property string $amount
 * @property integer $payroll_id
 * @property integer $department_id
 *
 * The followings are the available model relations:
 * @property Department $department
 * @property Employee $employee
 * @property Particular $particular
 * @property Payroll $payroll
 */
class Transaction extends CActiveRecord
{
	const p='Pending';
	const ip='In Process';
	const fc='For Check';
		
	public function getStat()
	{
		return array(
			self::p=>'Pending',
			self::ip=>'In process',
			self::fc=>'For check',
		);
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transaction the static model class
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
		return 'transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('number, employee_id, particular_id, status, date_received, date_submitted, period_from, period_to, amount, payroll_id, department_id', 'required'),
			array('employee_id, particular_id, payroll_id, department_id', 'numerical', 'integerOnly'=>true),
			array('number', 'length', 'max'=>14),
			array('status', 'length', 'max'=>20),
			array('amount', 'length', 'max'=>8),
			array('date_modified','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'update'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, number, employee_id, particular_id, status, date_received, date_submitted, period_from, period_to, amount, payroll_id, department_id', 'safe', 'on'=>'search'),
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
			'department' => array(self::BELONGS_TO, 'Department', 'department_id'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employee_id'),
			'particular' => array(self::BELONGS_TO, 'Particular', 'particular_id'),
			'payroll' => array(self::BELONGS_TO, 'Payroll', 'payroll_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Transaction',
			'number' => 'Transaction Number',
			'employee_id' => 'Employee',
			'particular_id' => 'Particular',
			'status' => 'Status',
			'date_modified' => 'Modified on',
			'date_received' => 'Date Received',
			'date_submitted' => 'Date Submitted',
			'period_from' => 'Period From',
			'period_to' => 'Period To',
			'amount' => 'Amount',
			'payroll_id' => 'Payroll',
			'department_id' => 'Department',
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
		$criteria->compare('number',$this->number,true);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('particular_id',$this->particular_id);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('date_received',$this->date_received,true);
		$criteria->compare('date_submitted',$this->date_submitted,true);
		$criteria->compare('period_from',$this->period_from,true);
		$criteria->compare('period_to',$this->period_to,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('payroll_id',$this->payroll_id);
		$criteria->compare('department_id',$this->department_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}