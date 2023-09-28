<?php

/**
 * This is the model class for table "machines".
 *
 * The followings are the available columns in table 'machines':
 * @property integer $id_machines
 * @property string $location
 * @property string $name
 * @property string $industry
 * @property string $code
 * @property string $description
 * @property string $tags
 * @property string $price_start_detail
 * @property string $price_end_detail
 * @property string $price_start_out
 * @property string $price_end_out
 */
class Machines extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'machines';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('location, description, tags', 'length', 'max'=>256),
			array('name', 'length', 'max'=>128),
			array('industry, price_start_detail, price_end_detail, price_start_out, price_end_out', 'length', 'max'=>45),
			array('code', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_machines, location, name, industry, code, description, tags, price_start_detail, price_end_detail, price_start_out, price_end_out', 'safe', 'on'=>'search'),
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
			'id_machines' => 'Id Machines',
			'location' => 'UBICACION',
			'name' => 'MARCA',
			'industry' => 'INDUSTRIA',
			'code' => 'CODIGO',
			'description' => 'DESCRIPCION',
			'tags' => 'TAGS',
			'price_start_detail' => 'PRECIO START DETALLE',
			'price_end_detail' => 'PRECIO END DETALLE',
			'price_start_out' => 'PRECIO START POR MAYOR',
			'price_end_out' => 'PRECIO END POR MAYOR',
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

		$criteria->compare('id_machines',$this->id_machines);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('industry',$this->industry,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('tags',$this->tags,true);
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
	 * @return Machines the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
