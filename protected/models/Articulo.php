<?php

/**
 * This is the model class for table "articulo".
 *
 * The followings are the available columns in table 'articulo':
 * @property string $id_articulo
 * @property string $nombre_articulo
 *
 * The followings are the available model relations:
 * @property Certificados[] $certificadoses
 * @property Facturacion[] $facturacions
 * @property Proveedorxarticulo[] $proveedorxarticulos
 */
class Articulo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Articulo the static model class
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
		return 'articulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_articulo, nombre_articulo', 'required'),
			array('id_articulo, nombre_articulo', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_articulo, nombre_articulo', 'safe', 'on'=>'search'),
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
			'certificados' => array(self::HAS_MANY, 'Certificados', 'id_articulo'),
			'facturacion' => array(self::HAS_MANY, 'Facturacion', 'id_articulo'),
			'proveedorxarticulos' => array(self::HAS_MANY, 'Proveedorxarticulo', 'articulo_id_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_articulo'=>'Codigo',
			'nombre_articulo'=>'Nombre Articulo',
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

		$criteria->compare('id_articulo',$this->id_articulo,true);
		$criteria->compare('nombre_articulo',$this->nombre_articulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}