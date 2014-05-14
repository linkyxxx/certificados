<?php
/* @var $this MEDIDAController */
/* @var $model MEDIDA */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medida-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MEDIDA_ID'); ?>
		<?php echo $form->textField($model,'MEDIDA_ID'); ?>
		<?php echo $form->error($model,'MEDIDA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIAMETRO'); ?>
		<?php echo $form->textField($model,'DIAMETRO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'DIAMETRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LARGO'); ?>
		<?php echo $form->textField($model,'LARGO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'LARGO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALTURA'); ?>
		<?php echo $form->textField($model,'ALTURA',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'ALTURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ENTRE_CARAS'); ?>
		<?php echo $form->textField($model,'ENTRE_CARAS',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'ENTRE_CARAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NUMERO_DE_HILOS'); ?>
		<?php echo $form->textField($model,'NUMERO_DE_HILOS',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'NUMERO_DE_HILOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO_HILO'); ?>
		<?php echo $form->textField($model,'TIPO_HILO',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'TIPO_HILO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO_ARTICULO_TIPO_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'TIPO_ARTICULO_TIPO_ARTICULO_ID'); ?>
		<?php echo $form->error($model,'TIPO_ARTICULO_TIPO_ARTICULO_ID'); ?>
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