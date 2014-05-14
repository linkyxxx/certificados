<?php

/**
 * This is the model class for table "FACTURACION".
 *
 * The followings are the available columns in table 'FACTURACION':
 * @property integer $NUMERO_FACTURA_ID
 * @property string $NOMBRE_ARTICULO_ID
 * @property string $TIPO_ARTICULO
 * @property string $MEDIDA_ID
 * @property string $CLIENTE_ID
 * @property string $TIMESTAMP
 * @property integer $CERTIFICADO_CERTIFICADO_ID
 * @property string $CLIENTE_CLIENTE_ID
 *
 * The followings are the available model relations:
 * @property ARTICULO[] $aRTICULOs
 * @property CERTIFICADO $cERTIFICADOCERTIFICADO
 * @property CLIENTE $cLIENTECLIENTE
 * @property MEDIDA[] $mEDIDAs
 * @property TIPOARTICULO[] $tIPOARTICULOs
 * @property USUARIO[] $uSUARIOs
 */
class FACTURACION extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FACTURACION the static model class
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
		return 'FACTURACION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NUMERO_FACTURA_ID, NOMBRE_ARTICULO_ID, TIPO_ARTICULO, MEDIDA_ID, CLIENTE_ID, TIMESTAMP, CERTIFICADO_CERTIFICADO_ID, CLIENTE_CLIENTE_ID', 'required'),
			array('NUMERO_FACTURA_ID, CERTIFICADO_CERTIFICADO_ID', 'numerical', 'integerOnly'=>true),
			array('NOMBRE_ARTICULO_ID, TIPO_ARTICULO, MEDIDA_ID, CLIENTE_ID, CLIENTE_CLIENTE_ID', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NUMERO_FACTURA_ID, NOMBRE_ARTICULO_ID, TIPO_ARTICULO, MEDIDA_ID, CLIENTE_ID, TIMESTAMP, CERTIFICADO_CERTIFICADO_ID, CLIENTE_CLIENTE_ID', 'safe', 'on'=>'search'),
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
			'aRTICULOs' => array(self::HAS_MANY, 'ARTICULO', 'FACTURACION_NUMERO_FACTURA_ID'),
			'cERTIFICADOCERTIFICADO' => array(self::BELONGS_TO, 'CERTIFICADO', 'CERTIFICADO_CERTIFICADO_ID'),
			'cLIENTECLIENTE' => array(self::BELONGS_TO, 'CLIENTE', 'CLIENTE_CLIENTE_ID'),
			'mEDIDAs' => array(self::HAS_MANY, 'MEDIDA', 'FACTURACION_NUMERO_FACTURA_ID'),
			'tIPOARTICULOs' => array(self::HAS_MANY, 'TIPOARTICULO', 'FACTURACION_NUMERO_FACTURA_ID'),
			'uSUARIOs' => array(self::HAS_MANY, 'USUARIO', 'FACTURACION_NUMERO_FACTURA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NUMERO_FACTURA_ID' => 'Numero Factura',
			'NOMBRE_ARTICULO_ID' => 'Nombre Articulo',
			'TIPO_ARTICULO' => 'Tipo Articulo',
			'MEDIDA_ID' => 'Medida',
			'CLIENTE_ID' => 'Cliente',
			'TIMESTAMP' => 'Timestamp',
			'CERTIFICADO_CERTIFICADO_ID' => 'Certificado Certificado',
			'CLIENTE_CLIENTE_ID' => 'Cliente Cliente',
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

		$criteria->compare('NUMERO_FACTURA_ID',$this->NUMERO_FACTURA_ID);
		$criteria->compare('NOMBRE_ARTICULO_ID',$this->NOMBRE_ARTICULO_ID,true);
		$criteria->compare('TIPO_ARTICULO',$this->TIPO_ARTICULO,true);
		$criteria->compare('MEDIDA_ID',$this->MEDIDA_ID,true);
		$criteria->compare('CLIENTE_ID',$this->CLIENTE_ID,true);
		$criteria->compare('TIMESTAMP',$this->TIMESTAMP,true);
		$criteria->compare('CERTIFICADO_CERTIFICADO_ID',$this->CERTIFICADO_CERTIFICADO_ID);
		$criteria->compare('CLIENTE_CLIENTE_ID',$this->CLIENTE_CLIENTE_ID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}