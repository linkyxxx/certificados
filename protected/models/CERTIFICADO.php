<?php

/**
 * This is the model class for table "CERTIFICADO".
 *
 * The followings are the available columns in table 'CERTIFICADO':
 * @property integer $CERTIFICADO_ID
 * @property string $ARTICULO_ID
 * @property string $TIPO_ARTICULO_ID
 * @property string $CLIENTE_ID
 * @property string $USUARIO_ID
 * @property string $TIMESTAMP
 * @property string $CLIENTE_CLIENTE_ID
 * @property string $PROVEEDOR_PROVEEDOR_ID
 * @property integer $USUARIO_USUARIO_ID
 *
 * The followings are the available model relations:
 * @property CLIENTE $cLIENTECLIENTE
 * @property PROVEEDOR $pROVEEDORPROVEEDOR
 * @property USUARIO $uSUARIOUSUARIO
 * @property FACTURACION[] $fACTURACIONs
 */
class CERTIFICADO extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CERTIFICADO the static model class
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
		return 'CERTIFICADO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CERTIFICADO_ID, ARTICULO_ID, TIPO_ARTICULO_ID, CLIENTE_ID, USUARIO_ID, TIMESTAMP, CLIENTE_CLIENTE_ID, PROVEEDOR_PROVEEDOR_ID, USUARIO_USUARIO_ID', 'required'),
			array('CERTIFICADO_ID, USUARIO_USUARIO_ID', 'numerical', 'integerOnly'=>true),
			array('ARTICULO_ID, TIPO_ARTICULO_ID, CLIENTE_ID, USUARIO_ID, CLIENTE_CLIENTE_ID, PROVEEDOR_PROVEEDOR_ID', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CERTIFICADO_ID, ARTICULO_ID, TIPO_ARTICULO_ID, CLIENTE_ID, USUARIO_ID, TIMESTAMP, CLIENTE_CLIENTE_ID, PROVEEDOR_PROVEEDOR_ID, USUARIO_USUARIO_ID', 'safe', 'on'=>'search'),
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
			'cLIENTECLIENTE' => array(self::BELONGS_TO, 'CLIENTE', 'CLIENTE_CLIENTE_ID'),
			'pROVEEDORPROVEEDOR' => array(self::BELONGS_TO, 'PROVEEDOR', 'PROVEEDOR_PROVEEDOR_ID'),
			'uSUARIOUSUARIO' => array(self::BELONGS_TO, 'USUARIO', 'USUARIO_USUARIO_ID'),
			'fACTURACIONs' => array(self::HAS_MANY, 'FACTURACION', 'CERTIFICADO_CERTIFICADO_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CERTIFICADO_ID' => 'Certificado',
			'ARTICULO_ID' => 'Articulo',
			'TIPO_ARTICULO_ID' => 'Tipo Articulo',
			'CLIENTE_ID' => 'Cliente',
			'USUARIO_ID' => 'Usuario',
			'TIMESTAMP' => 'Timestamp',
			'CLIENTE_CLIENTE_ID' => 'Cliente Cliente',
			'PROVEEDOR_PROVEEDOR_ID' => 'Proveedor Proveedor',
			'USUARIO_USUARIO_ID' => 'Usuario Usuario',
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

		$criteria->compare('CERTIFICADO_ID',$this->CERTIFICADO_ID);
		$criteria->compare('ARTICULO_ID',$this->ARTICULO_ID,true);
		$criteria->compare('TIPO_ARTICULO_ID',$this->TIPO_ARTICULO_ID,true);
		$criteria->compare('CLIENTE_ID',$this->CLIENTE_ID,true);
		$criteria->compare('USUARIO_ID',$this->USUARIO_ID,true);
		$criteria->compare('TIMESTAMP',$this->TIMESTAMP,true);
		$criteria->compare('CLIENTE_CLIENTE_ID',$this->CLIENTE_CLIENTE_ID,true);
		$criteria->compare('PROVEEDOR_PROVEEDOR_ID',$this->PROVEEDOR_PROVEEDOR_ID,true);
		$criteria->compare('USUARIO_USUARIO_ID',$this->USUARIO_USUARIO_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}