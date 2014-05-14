<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RAZON_SOCIAL'); ?>
		<?php echo $form->textField($model,'RAZON_SOCIAL',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIRECCION_FACTURACION'); ?>
		<?php echo $form->textField($model,'DIRECCION_FACTURACION',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUCURSAL'); ?>
		<?php echo $form->textField($model,'SUCURSAL',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GIRO'); ?>
		<?php echo $form->textField($model,'GIRO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FONO'); ?>
		<?php echo $form->textField($model,'FONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MAIL'); ?>
		<?php echo $form->textField($model,'MAIL',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE_CONTACTO'); ?>
		<?php echo $form->textField($model,'NOMBRE_CONTACTO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->