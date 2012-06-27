<?php

/**
 * This is the model class for table "MortgageMaster".
 *
 * The followings are the available columns in table 'MortgageMaster':
 * @property integer $id
 * @property integer $Land_ID
 * @property integer $CustomerID
 * @property string $DateCreated
 * @property string $UserID
 * @property string $ApprovedBy
 *
 * The followings are the available model relations:
 * @property MortgageDetails[] $mortgageDetails
 * @property CustomerMaster $customer
 * @property LandMaster $land
 */
class MortgageMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MortgageMaster the static model class
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
		return 'MortgageMaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, Land_ID, CustomerID', 'numerical', 'integerOnly'=>true),
			array('UserID, ApprovedBy', 'length', 'max'=>10),
			array('DateCreated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Land_ID, CustomerID, DateCreated, UserID, ApprovedBy', 'safe', 'on'=>'search'),
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
			'mortgageDetails' => array(self::HAS_MANY, 'MortgageDetails', 'id'),
			'customer' => array(self::BELONGS_TO, 'CustomerMaster', 'CustomerID'),
			'land' => array(self::BELONGS_TO, 'LandMaster', 'Land_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Land_ID' => 'Land',
			'CustomerID' => 'Customer',
			'DateCreated' => 'Date Created',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Land_ID',$this->Land_ID);
		$criteria->compare('CustomerID',$this->CustomerID);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('UserID',$this->UserID,true);
		$criteria->compare('ApprovedBy',$this->ApprovedBy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}