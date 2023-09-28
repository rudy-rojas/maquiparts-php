<?php

/**
 * This is the model class for table "tools".
 *
 * The followings are the available columns in table 'tools':
 * @property integer $id_tools
 * @property string $location
 * @property string $name
 * @property string $code
 * @property string $industry
 * @property string $size
 * @property string $description
 * @property string $lags
 * @property string $price_start_detail
 * @property string $price_end_detail
 * @property string $price_start_out
 * @property string $price_end_out
 */
class Tools extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tools';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('location, name', 'length', 'max'=>128),
			array('code', 'length', 'max'=>64),
			array('industry, size, price_start_detail, price_end_detail, price_start_out, price_end_out', 'length', 'max'=>45),
			array('description, lags', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tools, location, name, code, industry, size, description, lags, price_start_detail, price_end_detail, price_start_out, price_end_out', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tools' => 'Id Tools',
			'location' => 'Location',
			'name' => 'Name',
			'code' => 'Code',
			'industry' => 'Industry',
			'size' => 'Size',
			'description' => 'Description',
			'lags' => 'Lags',
			'price_start_detail' => 'Price Start Detail',
			'price_end_detail' => 'Price End Detail',
			'price_start_out' => 'Price Start Out',
			'price_end_out' => 'Price End Out',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_tools',$this->id_tools);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('industry',$this->industry,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('lags',$this->lags,true);
		$criteria->compare('price_start_detail',$this->price_start_detail,true);
		$criteria->compare('price_end_detail',$this->price_end_detail,true);
		$criteria->compare('price_start_out',$this->price_start_out,true);
		$criteria->compare('price_end_out',$this->price_end_out,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tools the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
