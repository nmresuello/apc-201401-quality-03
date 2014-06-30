<?php

/**
 * This is the model class for table "unit".
 *
 * The followings are the available columns in table 'unit':
 * @property integer $id
 * @property string $code
 * @property string $unit
 * @property string $subunit
 *
 * The followings are the available model relations:
 * @property UnitHistory[] $unitHistories
 */
class Unit extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Unit the static model class
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
		return 'unit';
	}
	
	public function getUnit()
	{
		return CHtml::listData($this->findAll(),'id','unit');
	}
	

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, unit, subunit', 'required'),
			array('code', 'length', 'max'=>3),
			array('unit, subunit', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, unit, subunit', 'safe', 'on'=>'search'),
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
			'unitHistories' => array(self::HAS_MANY, 'UnitHistory', 'unit_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Unit',
			'code' => 'Code',
			'unit' => 'Unit Name',
			'subunit' => 'Subunit',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('subunit',$this->subunit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}