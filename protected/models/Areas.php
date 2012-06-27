<?php

/**
 * This is the model class for table "Areas".
 *
 * The followings are the available columns in table 'Areas':
 * @property string $AreaID
 * @property string $AreaName
 *
 * The followings are the available model relations:
 * @property LandMaster[] $landMasters
 */
class Areas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Areas the static model class
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
		return 'Areas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('AreaName', 'required'),
			array('AreaName', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('AreaID, AreaName', 'safe', 'on'=>'search'),
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
			'landMasters' => array(self::HAS_MANY, 'LandMaster', 'Area_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'AreaID' => 'Area',
			'AreaName' => 'Area Name',
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

		$criteria->compare('AreaID',$this->AreaID,true);
		$criteria->compare('AreaName',$this->AreaName,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}