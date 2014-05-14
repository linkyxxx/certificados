<?php
/* @var $this FACTURACIONController */
/* @var $model FACTURACION */
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
		<?php echo $form->labelEx($model,'NUMERO_FACTURA_ID'); ?>
		<?php echo $form->textField($model,'NUMERO_FACTURA_ID'); ?>
		<?php echo $form->error($model,'NUMERO_FACTURA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'NOMBRE_ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NOMBRE_ARTICULO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO_ARTICULO'); ?>
		<?php echo $form->textField($model,'TIPO_ARTICULO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'TIPO_ARTICULO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MEDIDA_ID'); ?>
		<?php echo $form->textField($model,'MEDIDA_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'MEDIDA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'CLIENTE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
		<?php echo $form->error($model,'TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CERTIFICADO_CERTIFICADO_ID'); ?>
		<?php echo $form->textField($model,'CERTIFICADO_CERTIFICADO_ID'); ?>
		<?php echo $form->error($model,'CERTIFICADO_CERTIFICADO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLIENTE_CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'CLIENTE_CLIENTE_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->