<?php

/**
 * This is the model class for table "ARTICULO".
 *
 * The followings are the available columns in table 'ARTICULO':
 * @property string $ARTICULO_ID
 * @property string $NOMBRE_ARTICULO_ID
 * @property string $USUARIO_ID
 * @property string $PROVEEDOR_ID
 * @property string $TIMESTAMP
 * @property string $PROVEEDOR_PROVEEDOR_ID
 * @property integer $TIPO_ARTICULO_TIPO_ARTICULO_ID
 * @property integer $FACTURACION_NUMERO_FACTURA_ID
 * @property string $ARTICULOcol
 * @property string $ARTICULOcol1
 *
 * The followings are the available model relations:
 * @property PROVEEDOR $pROVEEDORPROVEEDOR
 * @property TIPOARTICULO $tIPOARTICULOTIPOARTICULO
 * @property FACTURACION $fACTURACIONNUMEROFACTURA
 */
class ARTICULO extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ARTICULO the static model class
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
		return 'ARTICULO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ARTICULO_ID, NOMBRE_ARTICULO_ID, USUARIO_ID, PROVEEDOR_ID, TIMESTAMP, PROVEEDOR_PROVEEDOR_ID, TIPO_ARTICULO_TIPO_ARTICULO_ID, FACTURACION_NUMERO_FACTURA_ID', 'required'),
			array('TIPO_ARTICULO_TIPO_ARTICULO_ID, FACTURACION_NUMERO_FACTURA_ID', 'numerical', 'integerOnly'=>true),
			array('ARTICULO_ID, NOMBRE_ARTICULO_ID, USUARIO_ID, PROVEEDOR_ID, PROVEEDOR_PROVEEDOR_ID', 'length', 'max'=>25),
			array('ARTICULOcol, ARTICULOcol1', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ARTICULO_ID, NOMBRE_ARTICULO_ID, USUARIO_ID, PROVEEDOR_ID, TIMESTAMP, PROVEEDOR_PROVEEDOR_ID, TIPO_ARTICULO_TIPO_ARTICULO_ID, FACTURACION_NUMERO_FACTURA_ID, ARTICULOcol, ARTICULOcol1', 'safe', 'on'=>'search'),
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
			'pROVEEDORPROVEEDOR' => array(self::BELONGS_TO, 'PROVEEDOR', 'PROVEEDOR_PROVEEDOR_ID'),
			'tIPOARTICULOTIPOARTICULO' => array(self::BELONGS_TO, 'TIPOARTICULO', 'TIPO_ARTICULO_TIPO_ARTICULO_ID'),
			'fACTURACIONNUMEROFACTURA' => array(self::BELONGS_TO, 'FACTURACION', 'FACTURACION_NUMERO_FACTURA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ARTICULO_ID' => 'Articulo',
			'NOMBRE_ARTICULO_ID' => 'Nombre Articulo',
			'USUARIO_ID' => 'Usuario',
			'PROVEEDOR_ID' => 'Proveedor',
			'TIMESTAMP' => 'Timestamp',
			'PROVEEDOR_PROVEEDOR_ID' => 'Proveedor Proveedor',
			'TIPO_ARTICULO_TIPO_ARTICULO_ID' => 'Tipo Articulo Tipo Articulo',
			'FACTURACION_NUMERO_FACTURA_ID' => 'Facturacion Numero Factura',
			'ARTICULOcol' => 'Articulocol',
			'ARTICULOcol1' => 'Articulocol1',
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

		$criteria->compare('ARTICULO_ID',$this->ARTICULO_ID,true);
		$criteria->compare('NOMBRE_ARTICULO_ID',$this->NOMBRE_ARTICULO_ID,true);
		$criteria->compare('USUARIO_ID',$this->USUARIO_ID,true);
		$criteria->compare('PROVEEDOR_ID',$this->PROVEEDOR_ID,true);
		$criteria->compare('TIMESTAMP',$this->TIMESTAMP,true);
		$criteria->compare('PROVEEDOR_PROVEEDOR_ID',$this->PROVEEDOR_PROVEEDOR_ID,true);
		$criteria->compare('TIPO_ARTICULO_TIPO_ARTICULO_ID',$this->TIPO_ARTICULO_TIPO_ARTICULO_ID);
		$criteria->compare('FACTURACION_NUMERO_FACTURA_ID',$this->FACTURACION_NUMERO_FACTURA_ID);
		$criteria->compare('ARTICULOcol',$this->ARTICULOcol,true);
		$criteria->compare('ARTICULOcol1',$this->ARTICULOcol1,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}