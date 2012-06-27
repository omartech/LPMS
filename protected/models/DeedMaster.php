<?php

/**
 * This is the model class for table "DeedMaster".
 *
 * The followings are the available columns in table 'DeedMaster':
 * @property string $DeedID
 * @property integer $Land_ID
 * @property string $DateCreated
 * @property string $Source
 * @property integer $SchemeDrawing
 * @property string $Status
 * @property string $UserID
 * @property string $ApprovedBy
 *
 * The followings are the available model relations:
 * @property DeedDetails[] $deedDetails
 * @property LandMaster $land
 */
class DeedMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DeedMaster the static model class
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
		return 'DeedMaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Land_ID, SchemeDrawing', 'numerical', 'integerOnly'=>true),
			array('DeedID, UserID, ApprovedBy', 'length', 'max'=>10),
			array('Source', 'length', 'max'=>30),
			array('Status', 'length', 'max'=>1),
			array('DateCreated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DeedID, Land_ID, DateCreated, Source, SchemeDrawing, Status, UserID, ApprovedBy', 'safe', 'on'=>'search'),
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
			'deedDetails' => array(self::HAS_MANY, 'DeedDetails', 'DeedID'),
			'land' => array(self::BELONGS_TO, 'LandMaster', 'Land_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DeedID' => 'Deed',
			'Land_ID' => 'Land',
			'DateCreated' => 'Date Created',
			'Source' => 'Source',
			'SchemeDrawing' => 'Scheme Drawing',
			'Status' => 'Status',
			'UserID' => 'User',
			'ApprovedBy' => 'Approved By',
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

		$criteria->compare('DeedID',$this->DeedID,true);
		$criteria->compare('Land_ID',$this->Land_ID);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('Source',$this->Source,true);
		$criteria->compare('SchemeDrawing',$this->SchemeDrawing);
		$criteria->compare('Status',$this->Status,true);
		$criteria->compare('UserID',$this->UserID,true);
		$criteria->compare('ApprovedBy',$this->ApprovedBy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}