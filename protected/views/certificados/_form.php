<?php
/* @var $this CertificadosController */
/* @var $model Certificados */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'certificados-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_certificados'); ?>
		<?php echo $form->textField($model,'id_certificados',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'id_certificados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_facturacion'); ?>
		<?php echo $form->textField($model,'id_facturacion'); ?>
		<?php echo $form->error($model,'id_facturacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
		<?php echo $form->error($model,'timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_articulo'); ?>
		<?php echo $form->textField($model,'id_articulo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'id_articulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->