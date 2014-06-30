<?php

/**
 * This is the model class for table "particular".
 *
 * The followings are the available columns in table 'particular':
 * @property integer $id
 * @property string $type
 * @property string $code
 * @property string $description
 * @property integer $group1
 * @property string $degree
 * @property string $ngas
 * @property integer $group2
 * @property integer $percentage
 *
 * The followings are the available model relations:
 * @property Transaction[] $transactions
 */
class Particular extends CActiveRecord
{
	const varb='Variable';
	const col='Collateral';
	
	public function getClaim()
	{
		return array(
			self::varb=>'Variable Claim',
			self::col=>'Collateral Claim',
		);
	}
	
	public function getSpeclaim()
	{
		return CHtml::listData($this->findAll(),'id','description');
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Particular the static model class
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
		return 'particular';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, code, description', 'required'),
			array('group1, group2, percentage', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>10),
			array('code, description', 'length', 'max'=>45),
			array('degree, ngas', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, code, description, group1, degree, ngas, group2, percentage', 'safe', 'on'=>'search'),
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
			'transactions' => array(self::HAS_MANY, 'Transaction', 'particular_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Particular',
			'type' => 'Type',
			'code' => 'Code',
			'description' => 'Description',
			'group1' => 'Group 1',
			'degree' => 'Degree',
			'ngas' => 'NGAS',
			'group2' => 'Group 2',
			'percentage' => 'Percentage',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('group1',$this->group1);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('ngas',$this->ngas,true);
		$criteria->compare('group2',$this->group2);
		$criteria->compare('percentage',$this->percentage);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}