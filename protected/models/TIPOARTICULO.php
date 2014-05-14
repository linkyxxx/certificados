<?php

/**
 * This is the model class for table "TIPO_ARTICULO".
 *
 * The followings are the available columns in table 'TIPO_ARTICULO':
 * @property integer $TIPO_ARTICULO_ID
 * @property string $RECUBRIMIENTO
 * @property string $MEDIDA_ID
 * @property string $TIMESTAMP
 * @property integer $FACTURACION_NUMERO_FACTURA_ID
 *
 * The followings are the available model relations:
 * @property ARTICULO[] $aRTICULOs
 * @property MEDIDA[] $mEDIDAs
 * @property FACTURACION $fACTURACIONNUMEROFACTURA
 */
class TIPOARTICULO extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TIPOARTICULO the static model class
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
		return 'TIPO_ARTICULO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TIPO_ARTICULO_ID, RECUBRIMIENTO, MEDIDA_ID, TIMESTAMP, FACTURACION_NUMERO_FACTURA_ID', 'required'),
			array('TIPO_ARTICULO_ID, FACTURACION_NUMERO_FACTURA_ID', 'numerical', 'integerOnly'=>true),
			array('RECUBRIMIENTO', 'length', 'max'=>25),
			array('MEDIDA_ID', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('TIPO_ARTICULO_ID, RECUBRIMIENTO, MEDIDA_ID, TIMESTAMP, FACTURACION_NUMERO_FACTURA_ID', 'safe', 'on'=>'search'),
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
			'aRTICULOs' => array(self::HAS_MANY, 'ARTICULO', 'TIPO_ARTICULO_TIPO_ARTICULO_ID'),
			'mEDIDAs' => array(self::HAS_MANY, 'MEDIDA', 'TIPO_ARTICULO_TIPO_ARTICULO_ID'),
			'fACTURACIONNUMEROFACTURA' => array(self::BELONGS_TO, 'FACTURACION', 'FACTURACION_NUMERO_FACTURA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TIPO_ARTICULO_ID' => 'Tipo Articulo',
			'RECUBRIMIENTO' => 'Recubrimiento',
			'MEDIDA_ID' => 'Medida',
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

		$criteria->compare('TIPO_ARTICULO_ID',$this->TIPO_ARTICULO_ID);
		$criteria->compare('RECUBRIMIENTO',$this->RECUBRIMIENTO,true);
		$criteria->compare('MEDIDA_ID',$this->MEDIDA_ID,true);
		$criteria->compare('TIMESTAMP',$this->TIMESTAMP,true);
		$criteria->compare('FACTURACION_NUMERO_FACTURA_ID',$this->FACTURACION_NUMERO_FACTURA_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}