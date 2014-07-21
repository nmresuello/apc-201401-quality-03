<?php

/**
 * This is the model class for table "payroll".
 *
 * The followings are the available columns in table 'payroll':
 * @property integer $id
 * @property string $number
 * @property string $month
 * @property string $pay_year
 *
 * The followings are the available model relations:
 * @property EmployeesHasPayroll[] $employeesHasPayrolls
 * @property Transaction[] $transactions
 */
class Payroll extends CActiveRecord
{
	
	const jan='Jan';
	const feb='Feb';
	const mar='Mar';
	const apr='Apr';
	const may='May';
	const jun='Jun';
	const jul='Jul';
	const aug='Aug';
	const sep='Sep';
	const oct='Oct';
	const nov='Nov';
	const dec='Dec';
	
	
	
	public function getMonth()
	{
		return array(
			self::jan=>'January',
			self::feb=>'February',
			self::mar=>'March',
			self::apr=>'April',
			self::may=>'May',
			self::jun=>'June',
			self::jul=>'July',
			self::aug=>'August',
			self::sep=>'September',
			self::oct=>'October',
			self::nov=>'November',
			self::dec=>'December',
		);
	}
	
	public function getPaynum()
	{
		return CHtml::listData($this->findAll(),'id','number');
	}
	
	public function getMonthyr()
	{
		return $this->month.' '. $this->pay_year;
	}
	
	public function getYear(){
	
		$yearNow = date("Y");
		$yearFrom = $yearNow - 100;
		$arrYears = array();
		    	 
				 foreach (range($yearFrom, $yearNow) as $number) {
				 $arrYears[$number] = $number; 
				 }
		
		return $arrYears = array_reverse($arrYears, true);
		/**$yeartoday=date("Y");
		return array(range($yeartoday-100, $yeartoday)
			
		);*/
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Payroll the static model class
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
		return 'payroll';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('number, month, pay_year', 'required'),
			array('number', 'length', 'max'=>10),
			array('month', 'length', 'max'=>3),
			array('pay_year', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, number, month, pay_year', 'safe', 'on'=>'search'),
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
			'employeesHasPayrolls' => array(self::HAS_MANY, 'EmployeesHasPayroll', 'payroll_id'),
			'transactions' => array(self::HAS_MANY, 'Transaction', 'payroll_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Payroll',
			'number' => 'Payroll Number',
			'month' => 'Month',
			'pay_year' => 'Year',
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
		$criteria->compare('month',$this->month,true);
		$criteria->compare('pay_year',$this->pay_year,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}