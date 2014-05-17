<?php

/**
 * This is the model class for table "proveedorxarticulo".
 *
 * The followings are the available columns in table 'proveedorxarticulo':
 * @property string $id_proveedorxarticulo
 * @property string $id_proveedor
 * @property string $articulo_id_articulo
 *
 * The followings are the available model relations:
 * @property Proveedor $idProveedor
 * @property Articulo $articuloIdArticulo
 */
class Proveedorxarticulo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proveedorxarticulo the static model class
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
		return 'proveedorxarticulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_proveedorxarticulo, id_proveedor, articulo_id_articulo', 'required'),
			array('id_proveedorxarticulo, articulo_id_articulo', 'length', 'max'=>25),
			array('id_proveedor', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_proveedorxarticulo, id_proveedor, articulo_id_articulo', 'safe', 'on'=>'search'),
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
			'articuloIdArticulo' => array(self::BELONGS_TO, 'Articulo', 'articulo_id_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proveedorxarticulo' => 'Id Proveedorxarticulo',
			'id_proveedor' => 'Id Proveedor',
			'articulo_id_articulo' => 'Articulo Id Articulo',
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

		$criteria->compare('id_proveedorxarticulo',$this->id_proveedorxarticulo,true);
		$criteria->compare('id_proveedor',$this->id_proveedor,true);
		$criteria->compare('articulo_id_articulo',$this->articulo_id_articulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}