<?php
/* @var $this USUARIOController */
/* @var $model USUARIO */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USUARIO_ID'); ?>
		<?php echo $form->textField($model,'USUARIO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE_COMPLETO'); ?>
		<?php echo $form->textField($model,'NOMBRE_COMPLETO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERFIL'); ?>
		<?php echo $form->textField($model,'PERFIL',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUARIO'); ?>
		<?php echo $form->textField($model,'USUARIO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASS'); ?>
		<?php echo $form->passwordField($model,'PASS',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CORREO'); ?>
		<?php echo $form->textField($model,'CORREO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FONO'); ?>
		<?php echo $form->textField($model,'FONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FACTURACION_NUMERO_FACTURA_ID'); ?>
		<?php echo $form->textField($model,'FACTURACION_NUMERO_FACTURA_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->