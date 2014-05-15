<?php
/* @var $this ARTICULOController */
/* @var $model ARTICULO */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'NOMBRE_ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUARIO_ID'); ?>
		<?php echo $form->textField($model,'USUARIO_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROVEEDOR_ID'); ?>
		<?php echo $form->textField($model,'PROVEEDOR_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROVEEDOR_PROVEEDOR_ID'); ?>
		<?php echo $form->textField($model,'PROVEEDOR_PROVEEDOR_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_ARTICULO_TIPO_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'TIPO_ARTICULO_TIPO_ARTICULO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FACTURACION_NUMERO_FACTURA_ID'); ?>
		<?php echo $form->textField($model,'FACTURACION_NUMERO_FACTURA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICULOcol'); ?>
		<?php echo $form->textField($model,'ARTICULOcol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICULOcol1'); ?>
		<?php echo $form->textField($model,'ARTICULOcol1',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->