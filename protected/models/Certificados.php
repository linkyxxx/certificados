<?php

/**
 * This is the model class for table "certificados".
 *
 * The followings are the available columns in table 'certificados':
 * @property string $id_certificados
 * @property string $id_proveedor
 * @property integer $id_facturacion
 * @property integer $id_cliente
 * @property integer $id_usuario
 * @property string $timestamp
 * @property string $id_articulo
 *
 * The followings are the available model relations:
 * @property Proveedor $idProveedor
 * @property Facturacion $idFacturacion
 * @property Cliente $idCliente
 * @property Usuario $idUsuario
 * @property Articulo $idArticulo
 */
class Certificados extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Certificados the static model class
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
		return 'certificados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_certificados, id_proveedor, id_facturacion, id_cliente, id_usuario, timestamp, id_articulo', 'required'),
			array('id_facturacion, id_cliente, id_usuario', 'numerical', 'integerOnly'=>true),
			array('id_certificados, id_proveedor, id_articulo', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_certificados, id_proveedor, id_facturacion, id_cliente, id_usuario, timestamp, id_articulo', 'safe', 'on'=>'search'),
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
			'idProveedor' => array(self::BELONGS_TO, 'Proveedor', 'id_proveedor'),
			'idFacturacion' => array(self::BELONGS_TO, 'Facturacion', 'id_facturacion'),
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
			'idArticulo' => array(self::BELONGS_TO, 'Articulo', 'id_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_certificados' => 'Id Certificados',
			'id_proveedor' => 'Id Proveedor',
			'id_facturacion' => 'Id Facturacion',
			'id_cliente' => 'Id Cliente',
			'id_usuario' => 'Id Usuario',
			'timestamp' => 'Timestamp',
			'id_articulo' => 'Id Articulo',
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

		$criteria->compare('id_certificados',$this->id_certificados,true);
		$criteria->compare('id_proveedor',$this->id_proveedor,true);
		$criteria->compare('id_facturacion',$this->id_facturacion);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('id_articulo',$this->id_articulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}