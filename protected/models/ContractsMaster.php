<?php

/**
 * This is the model class for table "ContractsMaster".
 *
 * The followings are the available columns in table 'ContractsMaster':
 * @property string $ContractsID
 * @property string $ContractType
 * @property string $Land_ID
 * @property double $NetAmount
 * @property double $FeesCharged
 * @property string $DateCreated
 * @property string $UserID
 * @property string $ApprovedBy
 *
 * The followings are the available model relations:
 * @property ContractsDetail[] $contractsDetails
 * @property LandMaster $land
 */
class ContractsMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContractsMaster the static model class
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
		return 'ContractsMaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ContractType, Land_ID, NetAmount, FeesCharged, DateCreated, UserID, ApprovedBy', 'required'),
			array('NetAmount, FeesCharged', 'numerical'),
			array('ContractType', 'length', 'max'=>11),
			array('Land_ID', 'length', 'max'=>10),
			array('UserID, ApprovedBy', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ContractsID, ContractType, Land_ID, NetAmount, FeesCharged, DateCreated, UserID, ApprovedBy', 'safe', 'on'=>'search'),
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
			'contractsDetails' => array(self::HAS_MANY, 'ContractsDetail', 'ContractID'),
			'land' => array(self::BELONGS_TO, 'LandMaster', 'Land_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ContractsID' => 'Contracts',
			'ContractType' => 'Contract Type',
			'Land_ID' => 'Land',
			'NetAmount' => 'Net Amount',
			'FeesCharged' => 'Fees Charged',
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

		$criteria->compare('ContractsID',$this->ContractsID,true);
		$criteria->compare('ContractType',$this->ContractType,true);
		$criteria->compare('Land_ID',$this->Land_ID,true);
		$criteria->compare('NetAmount',$this->NetAmount);
		$criteria->compare('FeesCharged',$this->FeesCharged);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('UserID',$this->UserID,true);
		$criteria->compare('ApprovedBy',$this->ApprovedBy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}