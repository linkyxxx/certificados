<?php

/**
 * This is the model class for table "PROVEEDOR".
 *
 * The followings are the available columns in table 'PROVEEDOR':
 * @property string $PROVEEDOR_ID
 * @property string $LOTE_ID
 * @property string $ARTICULO_ID
 * @property integer $CANTIDAD
 * @property string $NOMBRE_ARTICULO_ID
 * @property string $TIMESTAMP
 *
 * The followings are the available model relations:
 * @property ARTICULO[] $aRTICULOs
 * @property CERTIFICADO[] $cERTIFICADOs
 */
class PROVEEDOR extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PROVEEDOR the static model class
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
		return 'PROVEEDOR';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PROVEEDOR_ID, LOTE_ID, ARTICULO_ID, NOMBRE_ARTICULO_ID', 'required'),
			array('CANTIDAD', 'numerical', 'integerOnly'=>true),
			array('PROVEEDOR_ID, LOTE_ID, ARTICULO_ID, NOMBRE_ARTICULO_ID', 'length', 'max'=>25),
			array('TIMESTAMP', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PROVEEDOR_ID, LOTE_ID, ARTICULO_ID, CANTIDAD, NOMBRE_ARTICULO_ID, TIMESTAMP', 'safe', 'on'=>'search'),
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
			'aRTICULOs' => array(self::HAS_MANY, 'ARTICULO', 'PROVEEDOR_PROVEEDOR_ID'),
			'cERTIFICADOs' => array(self::HAS_MANY, 'CERTIFICADO', 'PROVEEDOR_PROVEEDOR_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PROVEEDOR_ID' => 'Proveedor',
			'LOTE_ID' => 'Lote',
			'ARTICULO_ID' => 'Articulo',
			'CANTIDAD' => 'Cantidad',
			'NOMBRE_ARTICULO_ID' => 'Nombre Articulo',
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

		$criteria->compare('PROVEEDOR_ID',$this->PROVEEDOR_ID,true);
		$criteria->compare('LOTE_ID',$this->LOTE_ID,true);
		$criteria->compare('ARTICULO_ID',$this->ARTICULO_ID,true);
		$criteria->compare('CANTIDAD',$this->CANTIDAD);
		$criteria->compare('NOMBRE_ARTICULO_ID',$this->NOMBRE_ARTICULO_ID,true);
		$criteria->compare('TIMESTAMP',$this->TIMESTAMP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}