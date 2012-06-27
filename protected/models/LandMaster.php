<?php

/**
 * This is the model class for table "LandMaster".
 *
 * The followings are the available columns in table 'LandMaster':
 * @property string $Land_ID
 * @property string $Area_ID
 * @property integer $Plot_No
 * @property string $Land_Type
 *
 * The followings are the available model relations:
 * @property ContractsMaster[] $contractsMasters
 * @property DeedMaster[] $deedMasters
 * @property LandDetails[] $landDetails
 * @property LandFines[] $landFines
 * @property LandIntegration[] $landIntegrations
 * @property Areas $area
 * @property MortgageMaster[] $mortgageMasters
 */
class LandMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LandMaster the static model class
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
		return 'LandMaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Land_ID, Area_ID, Plot_No, Land_Type', 'required'),
			array('Plot_No', 'numerical', 'integerOnly'=>true),
			array('Land_ID', 'length', 'max'=>10),
			array('Area_ID', 'length', 'max'=>3),
			array('Land_Type', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Land_ID, Area_ID, Plot_No, Land_Type', 'safe', 'on'=>'search'),
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
			'contractsMasters' => array(self::HAS_MANY, 'ContractsMaster', 'Land_ID'),
			'deedMasters' => array(self::HAS_MANY, 'DeedMaster', 'Land_ID'),
			'landDetails' => array(self::HAS_MANY, 'LandDetails', 'Land_ID'),
			'landFines' => array(self::HAS_MANY, 'LandFines', 'Land_ID'),
			'landIntegrations' => array(self::HAS_MANY, 'LandIntegration', 'Land_ID'),
			'area' => array(self::BELONGS_TO, 'Areas', 'Area_ID'),
			'mortgageMasters' => array(self::HAS_MANY, 'MortgageMaster', 'Land_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Land_ID' => 'Land',
			'Area_ID' => 'Area',
			'Plot_No' => 'Plot No',
			'Land_Type' => 'Land Type',
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

		$criteria->compare('Land_ID',$this->Land_ID,true);
		$criteria->compare('Area_ID',$this->Area_ID,true);
		$criteria->compare('Plot_No',$this->Plot_No);
		$criteria->compare('Land_Type',$this->Land_Type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}