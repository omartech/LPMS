<?php

/**
 * This is the model class for table "ContractsDetail".
 *
 * The followings are the available columns in table 'ContractsDetail':
 * @property string $ContractsDetailID
 * @property string $ContractID
 * @property string $Type
 * @property string $CustomerID
 * @property double $Share
 *
 * The followings are the available model relations:
 * @property CustomerMaster $customer
 * @property ContractsMaster $contract
 */
class ContractsDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContractsDetail the static model class
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
		return 'ContractsDetail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ContractID, Type, CustomerID, Share', 'required'),
			array('Share', 'numerical'),
			array('ContractID, CustomerID', 'length', 'max'=>10),
			array('Type', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ContractsDetailID, ContractID, Type, CustomerID, Share', 'safe', 'on'=>'search'),
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
			'customer' => array(self::BELONGS_TO, 'CustomerMaster', 'CustomerID'),
			'contract' => array(self::BELONGS_TO, 'ContractsMaster', 'ContractID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ContractsDetailID' => 'Contracts Detail',
			'ContractID' => 'Contract',
			'Type' => 'Type',
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

		$criteria->compare('ContractsDetailID',$this->ContractsDetailID,true);
		$criteria->compare('ContractID',$this->ContractID,true);
		$criteria->compare('Type',$this->Type,true);
		$criteria->compare('CustomerID',$this->CustomerID,true);
		$criteria->compare('Share',$this->Share);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}