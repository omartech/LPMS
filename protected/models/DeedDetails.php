<?php

/**
 * This is the model class for table "DeedDetails".
 *
 * The followings are the available columns in table 'DeedDetails':
 * @property string $DeedDetailsID
 * @property string $DeedID
 * @property string $CustomerID
 * @property double $Share
 *
 * The followings are the available model relations:
 * @property DeedMaster $deed
 */
class DeedDetails extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DeedDetails the static model class
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
		return 'DeedDetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DeedID, CustomerID, Share', 'required'),
			array('Share', 'numerical'),
			array('DeedID, CustomerID', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DeedDetailsID, DeedID, CustomerID, Share', 'safe', 'on'=>'search'),
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
			'deed' => array(self::BELONGS_TO, 'DeedMaster', 'DeedID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DeedDetailsID' => 'Deed Details',
			'DeedID' => 'Deed',
			'CustomerID' => 'Customer',
			'Share' => 'Share',
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

		$criteria->compare('DeedDetailsID',$this->DeedDetailsID,true);
		$criteria->compare('DeedID',$this->DeedID,true);
		$criteria->compare('CustomerID',$this->CustomerID,true);
		$criteria->compare('Share',$this->Share);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}