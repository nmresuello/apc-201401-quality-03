<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property string $serialnum
 * @property string $lname
 * @property string $fname
 * @property string $mname
 * @property string $mobile_num
 * @property string $gender
 * @property string $birthdate
 * @property string $address
 * @property string $street
 * @property string $city
 * @property string $tin_num
 * @property string $philhealth_num
 * @property string $atm_num
 * @property string $pagibig_num
 * @property string $deduction
 * @property string $pct_tax
 * @property string $bir_exempt
 *
 * The followings are the available model relations:
 * @property User[] $users
 * @property EmployeesHasPayroll[] $employeesHasPayrolls
 * @property RankHistory[] $rankHistories
 * @property Status[] $statuses
 * @property Transaction[] $transactions
 * @property UnitHistory[] $unitHistories
 */
class Employee extends CActiveRecord
{
	
	public $picture;
	public function getNames()
	{
		return $this->fname.' '. $this->mname.' '. $this->lname;
	}
	
	public function getEmployees()
	{
		return CHtml::listData($this->findAll(),'id','Names');
	}
	
	public function getRank()
	{
		return CHtml::listData(Rank::model()->findAll(), 'id', 'description');
	}
	
	const F='F';
	const M='M';
	
	public function getGender()
	{
		return array(
			self::F=>'Female',
			self::M=>'Male',
		);
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
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
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('serialnum, lname, fname, mobile_num, gender, birthdate, address, street, city, philhealth_num, atm_num, pagibig_num, deduction, pct_tax', 'required'),
			array('serialnum, tin_num, pct_tax', 'length', 'max'=>10),
			array('lname, fname, mname, address, street, city', 'length', 'max'=>30),
			array('mobile_num', 'length', 'max'=>11),
			array('gender', 'length', 'max'=>6),
			array('philhealth_num, atm_num, pagibig_num', 'length', 'max'=>20),
			array('deduction', 'length', 'max'=>8),
			array('bir_exempt', 'length', 'max'=>4),
			//array('time_log','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'update'),
        	//array('time_log','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, serialnum, lname, fname, mname, mobile_num, gender, birthdate, address, street, city, tin_num, philhealth_num, atm_num, pagibig_num, deduction, pct_tax, bir_exempt', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'User', 'employee_id'),
			'employeesHasPayrolls' => array(self::HAS_MANY, 'EmployeesHasPayroll', 'employee_id'),
			'rankHistories' => array(self::HAS_MANY, 'RankHistory', 'employee_id', 'order'=>'rank.date DESC'),
			'statuses' => array(self::HAS_MANY, 'Status', 'employee_id'),
			'transactions' => array(self::HAS_MANY, 'Transaction', 'employee_id'),
			'unitHistories' => array(self::HAS_MANY, 'UnitHistory', 'employee_id', 'order'=>'unit.date DESC'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Employee',
			'serialnum' => 'Serial Number',
			//'picture' => 'Picture',
			'lname' => 'Last Name',
			'fname' => 'First Name',
			'mname' => 'Middle Name',
			'mobile_num' => 'Mobile Number',
			'gender' => 'Gender',
			'birthdate' => 'Birthdate',
			'address' => 'Address',
			'street' => 'Street',
			'city' => 'City',
			'tin_num' => 'Tin Number',
			'philhealth_num' => 'PhilHealth Number',
			'atm_num' => 'ATM Number',
			'pagibig_num' => 'PAGIBIG Number',
			'deduction' => 'Deduction',
			'pct_tax' => 'PCT Tax',
			'bir_exempt' => 'BIR Exempt',
			'time_log' => 'Time Log',
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
		$criteria->compare('serialnum',$this->serialnum,true);
		//$criteria->compare('picture',$this->picture,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('mobile_num',$this->mobile_num,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('tin_num',$this->tin_num,true);
		$criteria->compare('philhealth_num',$this->philhealth_num,true);
		$criteria->compare('atm_num',$this->atm_num,true);
		$criteria->compare('pagibig_num',$this->pagibig_num,true);
		$criteria->compare('deduction',$this->deduction,true);
		$criteria->compare('pct_tax',$this->pct_tax,true);
		$criteria->compare('bir_exempt',$this->bir_exempt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
}