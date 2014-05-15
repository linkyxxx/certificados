<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Ingreso Usuario</h1>

<p>Complete el siguiente formulario con sus datos de acceso:</p>

<div class="form">
<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'login-form',
    'htmlOptions'=>array('class'=>'well'),
    'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<p class="note"><i>Los campos con <span class="required">*</span> son obligatorios.</i></p>
 
<?php echo $form->textFieldRow($model, 'username', array('class'=>'span3')); ?>
<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
<?php echo $form->checkboxRow($model, 'rememberMe'); ?>
<p style="text-align: right;"><b><?php echo CHtml::link('¿Olvidó su contraseña? Recuperela aquí',array('site/resetpass')); ?></b></p>

<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Entrar', 'type'=>'primary')); ?>

<?php $this->endWidget(); ?>
</div><!-- form -->
