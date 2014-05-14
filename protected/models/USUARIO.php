<?php

/**
 * This is the model class for table "USUARIO".
 *
 * The followings are the available columns in table 'USUARIO':
 * @property integer $USUARIO_ID
 * @property string $NOMBRE_COMPLETO
 * @property string $PERFIL
 * @property string $USUARIO
 * @property string $PASS
 * @property string $CORREO
 * @property integer $FONO
 * @property string $TIMESTAMP
 * @property integer $FACTURACION_NUMERO_FACTURA_ID
 *
 * The followings are the available model relations:
 * @property CERTIFICADO[] $cERTIFICADOs
 * @property FACTURACION $fACTURACIONNUMEROFACTURA
 */
class USUARIO extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return USUARIO the static model class
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
		return 'USUARIO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USUARIO_ID, NOMBRE_COMPLETO, PERFIL, USUARIO, PASS, CORREO, FONO, TIMESTAMP, FACTURACION_NUMERO_FACTURA_ID', 'required'),
			array('USUARIO_ID, FONO, FACTURACION_NUMERO_FACTURA_ID', 'numerical', 'integerOnly'=>true),
			array('NOMBRE_COMPLETO, PERFIL, USUARIO, PASS, CORREO', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('USUARIO_ID, NOMBRE_COMPLETO, PERFIL, USUARIO, PASS, CORREO, FONO, TIMESTAMP, FACTURACION_NUMERO_FACTURA_ID', 'safe', 'on'=>'search'),
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
			'cERTIFICADOs' => array(self::HAS_MANY, 'CERTIFICADO', 'USUARIO_USUARIO_ID'),
			'fACTURACIONNUMEROFACTURA' => array(self::BELONGS_TO, 'FACTURACION', 'FACTURACION_NUMERO_FACTURA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USUARIO_ID' => 'Usuario',
			'NOMBRE_COMPLETO' => 'Nombre Completo',
			'PERFIL' => 'Perfil',
			'USUARIO' => 'Usuario',
			'PASS' => 'Pass',
			'CORREO' => 'Correo',
			'FONO' => 'Fono',
			'TIMESTAMP' => 'Timestamp',
			'FACTURACION_NUMERO_FACTURA_ID' => 'Facturacion Numero Factura',
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

		$criteria->compare('USUARIO_ID',$this->USUARIO_ID);
		$criteria->compare('NOMBRE_COMPLETO',$this->NOMBRE_COMPLETO,true);
		$criteria->compare('PERFIL',$this->PERFIL,true);
		$criteria->compare('USUARIO',$this->USUARIO,true);
		$criteria->compare('PASS',$this->PASS,true);
		$criteria->compare('CORREO',$this->CORREO,true);
		$criteria->compare('FONO',$this->FONO);
		$criteria->compare('TIMESTAMP',$this->TIMESTAMP,true);
		$criteria->compare('FACTURACION_NUMERO_FACTURA_ID',$this->FACTURACION_NUMERO_FACTURA_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}