<?php

/**
 * This is the model class for table "debtors".
 *
 * The followings are the available columns in table 'debtors':
 * @property integer $id_debts
 * @property string $date
 * @property string $name
 * @property string $description
 * @property string $total_debt
 * @property string $status
 * @property string $note
 */
class Debtors extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'debtors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date', 'length', 'max' => 45),
			array('name, total_debt, status', 'length', 'max' => 256),
			array('description, note', 'length', 'max' => 512),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_debts, date, name, description, total_debt, status, note', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_debts' => 'Id Debts',
			'date' => 'Fecha de compra',
			'name' => 'Nombre cliente',
			'description' => 'Descripcion',
			'total_debt' => 'Total Deuda',
			'status' => 'Status',
			'note' => 'Nota',
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

		$criteria = new CDbCriteria;

		$criteria->compare('id_debts', $this->id_debts);
		$criteria->compare('date', $this->date, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('total_debt', $this->total_debt, true);
		$criteria->compare('status', $this->status, true);
		$criteria->compare('note', $this->note, true);

		$sort = new CSort;
		$sort->attributes = [
			'status' => [
				'asc' => 'status',
				'desc' => 'status desc',
			],
		];
		$sort->defaultOrder = ['status' => false];

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
			'sort' => $sort,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Debtors the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
