<?php
/* @var $this TIPOARTICULOController */
/* @var $model TIPOARTICULO */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TIPO_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'TIPO_ARTICULO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RECUBRIMIENTO'); ?>
		<?php echo $form->textField($model,'RECUBRIMIENTO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MEDIDA_ID'); ?>
		<?php echo $form->textField($model,'MEDIDA_ID',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FACTURACION_NUMERO_FACTURA_ID'); ?>
		<?php echo $form->textField($model,'FACTURACION_NUMERO_FACTURA_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->