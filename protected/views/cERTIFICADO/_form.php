<?php
/* @var $this CERTIFICADOController */
/* @var $model CERTIFICADO */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'certificado-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CERTIFICADO_ID'); ?>
		<?php echo $form->textField($model,'CERTIFICADO_ID'); ?>
		<?php echo $form->error($model,'CERTIFICADO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'ARTICULO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'TIPO_ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'TIPO_ARTICULO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'CLIENTE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO_ID'); ?>
		<?php echo $form->textField($model,'USUARIO_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'USUARIO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
		<?php echo $form->error($model,'TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLIENTE_CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'CLIENTE_CLIENTE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PROVEEDOR_PROVEEDOR_ID'); ?>
		<?php echo $form->textField($model,'PROVEEDOR_PROVEEDOR_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PROVEEDOR_PROVEEDOR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO_USUARIO_ID'); ?>
		<?php echo $form->textField($model,'USUARIO_USUARIO_ID'); ?>
		<?php echo $form->error($model,'USUARIO_USUARIO_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->