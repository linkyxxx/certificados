<?php
/* @var $this MEDIDAController */
/* @var $model MEDIDA */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MEDIDA_ID'); ?>
		<?php echo $form->textField($model,'MEDIDA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIAMETRO'); ?>
		<?php echo $form->textField($model,'DIAMETRO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LARGO'); ?>
		<?php echo $form->textField($model,'LARGO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALTURA'); ?>
		<?php echo $form->textField($model,'ALTURA',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ENTRE_CARAS'); ?>
		<?php echo $form->textField($model,'ENTRE_CARAS',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NUMERO_DE_HILOS'); ?>
		<?php echo $form->textField($model,'NUMERO_DE_HILOS',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_HILO'); ?>
		<?php echo $form->textField($model,'TIPO_HILO',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_ARTICULO_TIPO_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'TIPO_ARTICULO_TIPO_ARTICULO_ID'); ?>
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