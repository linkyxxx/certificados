<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'CLIENTE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RAZON_SOCIAL'); ?>
		<?php echo $form->textField($model,'RAZON_SOCIAL',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'RAZON_SOCIAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIRECCION_FACTURACION'); ?>
		<?php echo $form->textField($model,'DIRECCION_FACTURACION',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'DIRECCION_FACTURACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUCURSAL'); ?>
		<?php echo $form->textField($model,'SUCURSAL',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'SUCURSAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GIRO'); ?>
		<?php echo $form->textField($model,'GIRO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'GIRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FONO'); ?>
		<?php echo $form->textField($model,'FONO'); ?>
		<?php echo $form->error($model,'FONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MAIL'); ?>
		<?php echo $form->textField($model,'MAIL',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'MAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE_CONTACTO'); ?>
		<?php echo $form->textField($model,'NOMBRE_CONTACTO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NOMBRE_CONTACTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
		<?php echo $form->error($model,'TIMESTAMP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->