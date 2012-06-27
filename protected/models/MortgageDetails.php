<?php

/**
 * This is the model class for table "MortgageDetails".
 *
 * The followings are the available columns in table 'MortgageDetails':
 * @property integer $id
 * @property double $TotalAmount
 * @property string $Mortgager
 * @property integer $PeriodofTime
 * @property string $DateCreated
 * @property string $DateClosed
 *
 * The followings are the available model relations:
 * @property MortgageMaster $id0
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
			array('id, PeriodofTime', 'numerical', 'integerOnly'=>true),
			array('TotalAmount', 'numerical'),
			array('Mortgager', 'length', 'max'=>50),
			array('DateCreated, DateClosed', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, TotalAmount, Mortgager, PeriodofTime, DateCreated, DateClosed', 'safe', 'on'=>'search'),
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
			'id0' => array(self::BELONGS_TO, 'MortgageMaster', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'TotalAmount' => 'Total Amount',
			'Mortgager' => 'Mortgager',
			'PeriodofTime' => 'Periodof Time',
			'DateCreated' => 'Date Created',
			'DateClosed' => 'Date Closed',
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
		$criteria->compare('TotalAmount',$this->TotalAmount);
		$criteria->compare('Mortgager',$this->Mortgager,true);
		$criteria->compare('PeriodofTime',$this->PeriodofTime);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('DateClosed',$this->DateClosed,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}