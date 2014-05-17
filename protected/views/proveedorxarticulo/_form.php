<?php
/* @var $this ProveedorxarticuloController */
/* @var $model Proveedorxarticulo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedorxarticulo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedorxarticulo'); ?>
		<?php echo $form->textField($model,'id_proveedorxarticulo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'id_proveedorxarticulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'articulo_id_articulo'); ?>
		<?php echo $form->textField($model,'articulo_id_articulo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'articulo_id_articulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->