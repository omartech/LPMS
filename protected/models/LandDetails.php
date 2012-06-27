<?php

/**
 * This is the model class for table "LandDetails".
 *
 * The followings are the available columns in table 'LandDetails':
 * @property integer $Land_ID
 * @property string $Direction
 * @property double $Dimension
 * @property string $Description
 *
 * The followings are the available model relations:
 * @property LandMaster $land
 */
class LandDetails extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LandDetails the static model class
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
		return 'LandDetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Land_ID', 'numerical', 'integerOnly'=>true),
			array('Dimension', 'numerical'),
			array('Direction', 'length', 'max'=>1),
			array('Description', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Land_ID, Direction, Dimension, Description', 'safe', 'on'=>'search'),
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
			'land' => array(self::BELONGS_TO, 'LandMaster', 'Land_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Land_ID' => 'Land',
			'Direction' => 'Direction',
			'Dimension' => 'Dimension',
			'Description' => 'Description',
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

		$criteria->compare('Land_ID',$this->Land_ID);
		$criteria->compare('Direction',$this->Direction,true);
		$criteria->compare('Dimension',$this->Dimension);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}