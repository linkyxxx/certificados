<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

if (Yii::app()->user->isGuest){
                $this->redirect(array('login'));
}

?>
<h1> Resumen muestra la cantidad de Certificados ingresadas 