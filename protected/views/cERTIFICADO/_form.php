<?php
/* @var $this CERTIFICADOController */
/* @var $model CERTIFICADO */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'certificado-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

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

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Agregar' : 'Guardar',
			)); ?>
		<button type="reset" class="btn">Limpiar</button>
		<button onclick="window.history.go(-1)" class="btn" type="button">Cancelar</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->