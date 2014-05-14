<?php
/* @var $this TIPOARTICULOController */
/* @var $model TIPOARTICULO */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipoarticulo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'TIPO_ARTICULO_ID'); ?>
		<?php echo $form->error($model,'TIPO_ARTICULO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RECUBRIMIENTO'); ?>
		<?php echo $form->textField($model,'RECUBRIMIENTO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'RECUBRIMIENTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MEDIDA_ID'); ?>
		<?php echo $form->textField($model,'MEDIDA_ID',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'MEDIDA_ID'); ?>
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