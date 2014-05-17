<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property string $id_proveedor
 * @property string $id_lote
 * @property string $id_colada
 *
 * The followings are the available model relations:
 * @property Certificados[] $certificadoses
 * @property Proveedorxarticulo[] $proveedorxarticulos
 */
class Proveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
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
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_proveedor, id_lote, id_colada', 'required'),
			array('id_proveedor, id_lote, id_colada', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_proveedor, id_lote, id_colada', 'safe', 'on'=>'search'),
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
			'certificadoses' => array(self::HAS_MANY, 'Certificados', 'id_proveedor'),
			'proveedorxarticulos' => array(self::HAS_MANY, 'Proveedorxarticulo', 'id_proveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proveedor' => 'Id Proveedor',
			'id_lote' => 'Id Lote',
			'id_colada' => 'Id Colada',
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

		$criteria->compare('id_proveedor',$this->id_proveedor,true);
		$criteria->compare('id_lote',$this->id_lote,true);
		$criteria->compare('id_colada',$this->id_colada,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}