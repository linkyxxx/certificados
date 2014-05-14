<?php 

class WebUser extends CWebUser {

	private $_model;

	
	public function getUsuarioid(){
		if(Yii::app()->user->id){
			$usuarioID = Usuario::model()->findByAttributes(array('usuario_ID'=>Yii::app()->user->id))->usuarioID;
			return $usuarioID;
		}
	}

	public function getUsuarioDatos(){
		$datos = Usuario::model()->findByPk(Yii::app()->user->usuarioid);
		return $datos;
	}

	public function getUsuarioDependencia(){
		if(!Yii::app()->user->isGuest) {
			$user = Yii::app()->user->usuariodatos->dependencia;
			return $user;
		}
	}

	public function getUsuarioEmail(){
		if(!Yii::app()->user->isGuest) {
			$user = Yii::app()->user->usuariodatos->email;
			return $user;
		}
	}
	
	public function getUsuarioNombre(){
		if(!Yii::app()->user->isGuest) {
			$user = Yii::app()->user->usuariodatos->nombre;
			return $user;
		}
	}

	public function getUsuarioApellidoPat(){
		if(!Yii::app()->user->isGuest) {
			$user = Yii::app()->user->usuariodatos->apellido_pat;
			return $user;
		}
	}

	public function getUsuarioApellidoMat(){
		if(!Yii::app()->user->isGuest) {
			$user = Yii::app()->user->usuariodatos->apellido_mat;
			return $user;
		}
	}
	/*
	public function getUsuarioCargo(){
		if(!Yii::app()->user->isGuest) {
			$user = Yii::app()->user->usuariodatos->cargo;
			return $user;
		}
	}

	public function getUsuarioIniciales(){
		if(!Yii::app()->user->isGuest) {
			$user = Yii::app()->user->usuariodatos->iniciales;
			return $user;
		}
	}
	*/



}

?>