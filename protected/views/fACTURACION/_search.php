<?php
/* @var $this FACTURACIONController */
/* @var $model FACTURACION */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NUMERO_FACTURA_ID'); ?>
		<?php echo $form->textField($model,'NUMERO_FACTURA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'NOMBRE_ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_ARTICULO'); ?>
		<?php echo $form->textField($model,'TIPO_ARTICULO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MEDIDA_ID'); ?>
		<?php echo $form->textField($model,'MEDIDA_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CERTIFICADO_CERTIFICADO_ID'); ?>
		<?php echo $form->textField($model,'CERTIFICADO_CERTIFICADO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLIENTE_CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->