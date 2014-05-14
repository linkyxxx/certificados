<?php
/* @var $this USUARIOController */
/* @var $model USUARIO */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO_ID'); ?>
		<?php echo $form->textField($model,'USUARIO_ID'); ?>
		<?php echo $form->error($model,'USUARIO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE_COMPLETO'); ?>
		<?php echo $form->textField($model,'NOMBRE_COMPLETO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NOMBRE_COMPLETO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERFIL'); ?>
		<?php echo $form->textField($model,'PERFIL',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PERFIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO'); ?>
		<?php echo $form->textField($model,'USUARIO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASS'); ?>
		<?php echo $form->passwordField($model,'PASS',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PASS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CORREO'); ?>
		<?php echo $form->textField($model,'CORREO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'CORREO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FONO'); ?>
		<?php echo $form->textField($model,'FONO'); ?>
		<?php echo $form->error($model,'FONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
		<?php echo $form->error($model,'TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FACTURACION_NUMERO_FACTURA_ID'); ?>
		<?php echo $form->textField($model,'FACTURACION_NUMERO_FACTURA_ID'); ?>
		<?php echo $form->error($model,'FACTURACION_NUMERO_FACTURA_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->