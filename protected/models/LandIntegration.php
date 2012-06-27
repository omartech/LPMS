<?php

/**
 * This is the model class for table "LandIntegration".
 *
 * The followings are the available columns in table 'LandIntegration':
 * @property integer $Land_ID
 * @property string $Municipality_ID
 * @property string $SchemeDrawing
 * @property string $SatelliteImage
 * @property string $DateInserted
 * @property integer $Active
 *
 * The followings are the available model relations:
 * @property LandMaster $land
 */
class LandIntegration extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LandIntegration the static model class
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
		return 'LandIntegration';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Land_ID, Active', 'numerical', 'integerOnly'=>true),
			array('Municipality_ID', 'length', 'max'=>25),
			array('SchemeDrawing, SatelliteImage, DateInserted', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Land_ID, Municipality_ID, SchemeDrawing, SatelliteImage, DateInserted, Active', 'safe', 'on'=>'search'),
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
			'Municipality_ID' => 'Municipality',
			'SchemeDrawing' => 'Scheme Drawing',
			'SatelliteImage' => 'Satellite Image',
			'DateInserted' => 'Date Inserted',
			'Active' => 'Active',
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
		$criteria->compare('Municipality_ID',$this->Municipality_ID,true);
		$criteria->compare('SchemeDrawing',$this->SchemeDrawing,true);
		$criteria->compare('SatelliteImage',$this->SatelliteImage,true);
		$criteria->compare('DateInserted',$this->DateInserted,true);
		$criteria->compare('Active',$this->Active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}