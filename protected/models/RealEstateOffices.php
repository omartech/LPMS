<?php

/**
 * This is the model class for table "RealEstateOffices".
 *
 * The followings are the available columns in table 'RealEstateOffices':
 * @property string $ID
 * @property string $CommercialName
 * @property integer $OwnerName
 * @property string $RegisteredDate
 * @property string $ExpiryDate
 * @property string $ContactInfo
 *
 * The followings are the available model relations:
 * @property CustomerMaster $ownerName
 */
class RealEstateOffices extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RealEstateOffices the static model class
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
		return 'RealEstateOffices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('OwnerName', 'numerical', 'integerOnly'=>true),
			array('ID', 'length', 'max'=>10),
			array('CommercialName', 'length', 'max'=>30),
			array('ContactInfo', 'length', 'max'=>50),
			array('RegisteredDate, ExpiryDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, CommercialName, OwnerName, RegisteredDate, ExpiryDate, ContactInfo', 'safe', 'on'=>'search'),
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
			'ownerName' => array(self::BELONGS_TO, 'CustomerMaster', 'OwnerName'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'CommercialName' => 'Commercial Name',
			'OwnerName' => 'Owner Name',
			'RegisteredDate' => 'Registered Date',
			'ExpiryDate' => 'Expiry Date',
			'ContactInfo' => 'Contact Info',
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

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('CommercialName',$this->CommercialName,true);
		$criteria->compare('OwnerName',$this->OwnerName);
		$criteria->compare('RegisteredDate',$this->RegisteredDate,true);
		$criteria->compare('ExpiryDate',$this->ExpiryDate,true);
		$criteria->compare('ContactInfo',$this->ContactInfo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}