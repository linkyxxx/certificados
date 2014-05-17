<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'facturacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_facturacion'); ?>
		<?php echo $form->textField($model,'id_facturacion'); ?>
		<?php echo $form->error($model,'id_facturacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_articulo'); ?>
		<?php echo $form->textField($model,'id_articulo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'id_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->