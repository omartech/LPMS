<?php

/**
 * This is the model class for table "LandFines".
 *
 * The followings are the available columns in table 'LandFines':
 * @property integer $Land_ID
 * @property string $Flag
 * @property string $DateCreated
 * @property string $Remarks
 * @property double $Fee
 * @property string $UserID
 * @property integer $cleared
 *
 * The followings are the available model relations:
 * @property LandMaster $land
 */
class LandFines extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LandFines the static model class
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
		return 'LandFines';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Land_ID, cleared', 'numerical', 'integerOnly'=>true),
			array('Fee', 'numerical'),
			array('Flag', 'length', 'max'=>3),
			array('Remarks', 'length', 'max'=>100),
			array('UserID', 'length', 'max'=>10),
			array('DateCreated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Land_ID, Flag, DateCreated, Remarks, Fee, UserID, cleared', 'safe', 'on'=>'search'),
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
			'land' => array(self::BELONGS_TO, 'LandMaster', 'Land_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Land_ID' => 'Land',
			'Flag' => 'Flag',
			'DateCreated' => 'Date Created',
			'Remarks' => 'Remarks',
			'Fee' => 'Fee',
			'UserID' => 'User',
			'cleared' => 'Cleared',
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

		$criteria->compare('Land_ID',$this->Land_ID);
		$criteria->compare('Flag',$this->Flag,true);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('Remarks',$this->Remarks,true);
		$criteria->compare('Fee',$this->Fee);
		$criteria->compare('UserID',$this->UserID,true);
		$criteria->compare('cleared',$this->cleared);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}