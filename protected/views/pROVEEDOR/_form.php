<?php
/* @var $this PROVEEDORController */
/* @var $model PROVEEDOR */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'proveedor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
<fieldset>
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

</fieldset>
	<div class="form-actions" align="center">
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