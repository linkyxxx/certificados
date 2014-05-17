<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_lote'); ?>
		<?php echo $form->textField($model,'id_lote',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'id_lote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_colada'); ?>
		<?php echo $form->textField($model,'id_colada',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'id_colada'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->