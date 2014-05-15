<?php
/* @var $this ARTICULOController */
/* @var $model ARTICULO */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requerdos.</p>

<fieldset>
	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'NOMBRE_ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NOMBRE_ARTICULO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO_ID'); ?>
		<?php echo $form->textField($model,'USUARIO_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'USUARIO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PROVEEDOR_ID'); ?>
		<?php echo $form->textField($model,'PROVEEDOR_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PROVEEDOR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PROVEEDOR_PROVEEDOR_ID'); ?>
		<?php echo $form->textField($model,'PROVEEDOR_PROVEEDOR_ID',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PROVEEDOR_PROVEEDOR_ID'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICULOcol'); ?>
		<?php echo $form->textField($model,'ARTICULOcol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ARTICULOcol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICULOcol1'); ?>
		<?php echo $form->textField($model,'ARTICULOcol1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ARTICULOcol1'); ?>
	</div>
</fieldset>
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