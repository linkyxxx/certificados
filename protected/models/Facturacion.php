<?php

/**
 * This is the model class for table "facturacion".
 *
 * The followings are the available columns in table 'facturacion':
 * @property integer $id_facturacion
 * @property string $id_articulo
 * @property integer $id_cliente
 *
 * The followings are the available model relations:
 * @property Certificados[] $certificadoses
 * @property Articulo $idArticulo
 * @property Cliente $idCliente
 */
class Facturacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Facturacion the static model class
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
		return 'facturacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_facturacion, id_articulo, id_cliente', 'required'),
			array('id_facturacion, id_cliente', 'numerical', 'integerOnly'=>true),
			array('id_articulo', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_facturacion, id_articulo, id_cliente', 'safe', 'on'=>'search'),
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
			'certificadoses' => array(self::HAS_MANY, 'Certificados', 'id_facturacion'),
			'idArticulo' => array(self::BELONGS_TO, 'Articulo', 'id_articulo'),
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_facturacion' => 'Id Facturacion',
			'id_articulo' => 'Id Articulo',
			'id_cliente' => 'Id Cliente',
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

		$criteria->compare('id_facturacion',$this->id_facturacion);
		$criteria->compare('id_articulo',$this->id_articulo,true);
		$criteria->compare('id_cliente',$this->id_cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}