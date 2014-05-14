<?php

/**
 * This is the model class for table "MEDIDA".
 *
 * The followings are the available columns in table 'MEDIDA':
 * @property integer $MEDIDA_ID
 * @property string $DIAMETRO
 * @property string $LARGO
 * @property string $ALTURA
 * @property string $ENTRE_CARAS
 * @property string $NUMERO_DE_HILOS
 * @property string $TIPO_HILO
 * @property integer $TIPO_ARTICULO_TIPO_ARTICULO_ID
 * @property integer $FACTURACION_NUMERO_FACTURA_ID
 *
 * The followings are the available model relations:
 * @property TIPOARTICULO $tIPOARTICULOTIPOARTICULO
 * @property FACTURACION $fACTURACIONNUMEROFACTURA
 */
class MEDIDA extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MEDIDA the static model class
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
		return 'MEDIDA';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MEDIDA_ID, DIAMETRO, LARGO, ALTURA, ENTRE_CARAS, NUMERO_DE_HILOS, TIPO_HILO, TIPO_ARTICULO_TIPO_ARTICULO_ID, FACTURACION_NUMERO_FACTURA_ID', 'required'),
			array('MEDIDA_ID, TIPO_ARTICULO_TIPO_ARTICULO_ID, FACTURACION_NUMERO_FACTURA_ID', 'numerical', 'integerOnly'=>true),
			array('DIAMETRO, LARGO', 'length', 'max'=>25),
			array('ALTURA, ENTRE_CARAS, NUMERO_DE_HILOS, TIPO_HILO', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('MEDIDA_ID, DIAMETRO, LARGO, ALTURA, ENTRE_CARAS, NUMERO_DE_HILOS, TIPO_HILO, TIPO_ARTICULO_TIPO_ARTICULO_ID, FACTURACION_NUMERO_FACTURA_ID', 'safe', 'on'=>'search'),
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
			'MEDIDA_ID' => 'Medida',
			'DIAMETRO' => 'Diametro',
			'LARGO' => 'Largo',
			'ALTURA' => 'Altura',
			'ENTRE_CARAS' => 'Entre Caras',
			'NUMERO_DE_HILOS' => 'Numero De Hilos',
			'TIPO_HILO' => 'Tipo Hilo',
			'TIPO_ARTICULO_TIPO_ARTICULO_ID' => 'Tipo Articulo Tipo Articulo',
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

		$criteria->compare('MEDIDA_ID',$this->MEDIDA_ID);
		$criteria->compare('DIAMETRO',$this->DIAMETRO,true);
		$criteria->compare('LARGO',$this->LARGO,true);
		$criteria->compare('ALTURA',$this->ALTURA,true);
		$criteria->compare('ENTRE_CARAS',$this->ENTRE_CARAS,true);
		$criteria->compare('NUMERO_DE_HILOS',$this->NUMERO_DE_HILOS,true);
		$criteria->compare('TIPO_HILO',$this->TIPO_HILO,true);
		$criteria->compare('TIPO_ARTICULO_TIPO_ARTICULO_ID',$this->TIPO_ARTICULO_TIPO_ARTICULO_ID);
		$criteria->compare('FACTURACION_NUMERO_FACTURA_ID',$this->FACTURACION_NUMERO_FACTURA_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}