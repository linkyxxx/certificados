<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_usuario
 * @property string $nombre
 * @property string $perfil
 * @property string $usuario
 * @property string $pass
 * @property string $correo
 * @property string $fono
 * @property string $timestamp
 *
 * The followings are the available model relations:
 * @property Certificados[] $certificadoses
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, perfil, usuario, pass, correo, fono,', 'required'),
			array('nombre, perfil, usuario, pass, correo', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_usuario, nombre, perfil, usuario, pass, correo, fono, timestamp', 'safe', 'on'=>'search'),
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
			'certificadoses' => array(self::HAS_MANY, 'Certificados', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Usuario',
			'nombre' => 'Nombre',
			'perfil' => 'Perfil',
			'usuario' => 'usuario',
			'pass' => 'Pass',
			'correo' => 'Correo',
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

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('perfil',$this->perfil,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('fono',$this->fono,true);
		$criteria->compare('timestamp',$this->timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
public function validatePassword($pass)
        {
         	return $this->hashPassword($pass) ===$this->pass;
         }   
          	public function hashPassword($pass)
        {
            return md5($pass) ;
        } 
	
}