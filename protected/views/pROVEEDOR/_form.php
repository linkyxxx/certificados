<?php
/* @var $this PROVEEDORController */
/* @var $model PROVEEDOR */
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
		<?php echo $form->labelEx($model,'PROVEEDOR_ID'); ?>
		<?php echo $form->textField($model,'PROVEEDOR_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PROVEEDOR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LOTE_ID'); ?>
		<?php echo $form->textField($model,'LOTE_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'LOTE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'ARTICULO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CANTIDAD'); ?>
		<?php echo $form->textField($model,'CANTIDAD'); ?>
		<?php echo $form->error($model,'CANTIDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'NOMBRE_ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NOMBRE_ARTICULO_ID'); ?>
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