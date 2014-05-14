<?php

/**
 * This is the model class for table "CLIENTE".
 *
 * The followings are the available columns in table 'CLIENTE':
 * @property string $CLIENTE_ID
 * @property string $RAZON_SOCIAL
 * @property string $DIRECCION_FACTURACION
 * @property string $SUCURSAL
 * @property string $GIRO
 * @property integer $FONO
 * @property string $MAIL
 * @property string $NOMBRE_CONTACTO
 * @property string $TIMESTAMP
 *
 * The followings are the available model relations:
 * @property CERTIFICADO[] $cERTIFICADOs
 * @property FACTURACION[] $fACTURACIONs
 */
class CLIENTE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CLIENTE the static model class
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
		return 'CLIENTE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CLIENTE_ID, RAZON_SOCIAL, DIRECCION_FACTURACION, SUCURSAL, GIRO, FONO, MAIL, NOMBRE_CONTACTO, TIMESTAMP', 'required'),
			array('FONO', 'numerical', 'integerOnly'=>true),
			array('CLIENTE_ID, RAZON_SOCIAL, DIRECCION_FACTURACION, SUCURSAL, GIRO, MAIL, NOMBRE_CONTACTO', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CLIENTE_ID, RAZON_SOCIAL, DIRECCION_FACTURACION, SUCURSAL, GIRO, FONO, MAIL, NOMBRE_CONTACTO, TIMESTAMP', 'safe', 'on'=>'search'),
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
			'cERTIFICADOs' => array(self::HAS_MANY, 'CERTIFICADO', 'CLIENTE_CLIENTE_ID'),
			'fACTURACIONs' => array(self::HAS_MANY, 'FACTURACION', 'CLIENTE_CLIENTE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CLIENTE_ID' => 'Cliente',
			'RAZON_SOCIAL' => 'Razon Social',
			'DIRECCION_FACTURACION' => 'Direccion Facturacion',
			'SUCURSAL' => 'Sucursal',
			'GIRO' => 'Giro',
			'FONO' => 'Fono',
			'MAIL' => 'Mail',
			'NOMBRE_CONTACTO' => 'Nombre Contacto',
			'TIMESTAMP' => 'Timestamp',
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

		$criteria->compare('CLIENTE_ID',$this->CLIENTE_ID,true);
		$criteria->compare('RAZON_SOCIAL',$this->RAZON_SOCIAL,true);
		$criteria->compare('DIRECCION_FACTURACION',$this->DIRECCION_FACTURACION,true);
		$criteria->compare('SUCURSAL',$this->SUCURSAL,true);
		$criteria->compare('GIRO',$this->GIRO,true);
		$criteria->compare('FONO',$this->FONO);
		$criteria->compare('MAIL',$this->MAIL,true);
		$criteria->compare('NOMBRE_CONTACTO',$this->NOMBRE_CONTACTO,true);
		$criteria->compare('TIMESTAMP',$this->TIMESTAMP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}