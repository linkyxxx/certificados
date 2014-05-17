<?php 

class WebUser extends CWebUser {
	private $_model;

	public function getUsuarionombre(){
		if(Yii::app()->user->id){
			$id = Usuario::model()->findByPk(Yii::app()->user->id)->nombre;
			return $id;
		}
	}

	public function getUsuarionivel(){
		if(Yii::app()->user->id){
			$id = Usuario::model()->findByPk(Yii::app()->user->id)->perfil;
			return $id;
		}
	}

	public function getEsAdmin(){
		if(Yii::app()->user->id){
			$perfil = Usuario::model()->findByPk(Yii::app()->user->id)->perfil;
			if($perfil == 1) return true;
			elseif($perfil ==2) return true;
			else return false;
		}
	}	
}

?>