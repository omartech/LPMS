<?php

/**
 * This is the model class for table "MortgageDetails".
 *
 * The followings are the available columns in table 'MortgageDetails':
 * @property string $MortgageDetailsID
 * @property string $MortgageID
 * @property double $TotalAmount
 * @property string $Mortgager
 * @property integer $PeriodOfTime
 * @property string $DateCreated
 * @property string $DateClosed
 * @property double $FeesCharged
 *
 * The followings are the available model relations:
 * @property MortgageMaster $mortgage
 */
class MortgageDetails extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MortgageDetails the static model class
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
		return 'MortgageDetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MortgageID, TotalAmount, Mortgager, PeriodOfTime, DateCreated, DateClosed, FeesCharged', 'required'),
			array('PeriodOfTime', 'numerical', 'integerOnly'=>true),
			array('TotalAmount, FeesCharged', 'numerical'),
			array('MortgageID', 'length', 'max'=>10),
			array('Mortgager', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('MortgageDetailsID, MortgageID, TotalAmount, Mortgager, PeriodOfTime, DateCreated, DateClosed, FeesCharged', 'safe', 'on'=>'search'),
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
			'mortgage' => array(self::BELONGS_TO, 'MortgageMaster', 'MortgageID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MortgageDetailsID' => 'Mortgage Details',
			'MortgageID' => 'Mortgage',
			'TotalAmount' => 'Total Amount',
			'Mortgager' => 'Mortgager',
			'PeriodOfTime' => 'Period Of Time',
			'DateCreated' => 'Date Created',
			'DateClosed' => 'Date Closed',
			'FeesCharged' => 'Fees Charged',
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

		$criteria->compare('MortgageDetailsID',$this->MortgageDetailsID,true);
		$criteria->compare('MortgageID',$this->MortgageID,true);
		$criteria->compare('TotalAmount',$this->TotalAmount);
		$criteria->compare('Mortgager',$this->Mortgager,true);
		$criteria->compare('PeriodOfTime',$this->PeriodOfTime);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('DateClosed',$this->DateClosed,true);
		$criteria->compare('FeesCharged',$this->FeesCharged);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}