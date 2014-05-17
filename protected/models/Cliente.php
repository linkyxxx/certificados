<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $id_cliente
 * @property string $razon_social
 * @property string $direccion
 * @property string $giro
 * @property string $mail
 * @property string $fono
 * @property string $timestamp
 *
 * The followings are the available model relations:
 * @property Certificados[] $certificadoses
 * @property Facturacion[] $facturacions
 */
class Cliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cliente the static model class
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
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('razon_social, direccion, giro, mail, fono, timestamp', 'required'),
			array('razon_social, giro, mail', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_cliente, razon_social, direccion, giro, mail, fono, timestamp', 'safe', 'on'=>'search'),
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
			'certificadoses' => array(self::HAS_MANY, 'Certificados', 'id_cliente'),
			'facturacions' => array(self::HAS_MANY, 'Facturacion', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente' => 'Id Cliente',
			'razon_social' => 'Razon Social',
			'direccion' => 'Direccion',
			'giro' => 'Giro',
			'mail' => 'Mail',
			'fono' => 'Fono',
			'timestamp' => 'Timestamp',
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

		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('razon_social',$this->razon_social,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('giro',$this->giro,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('fono',$this->fono,true);
		$criteria->compare('timestamp',$this->timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}