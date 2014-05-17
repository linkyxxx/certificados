<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_facturacion'); ?>
		<?php echo $form->textField($model,'id_facturacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_articulo'); ?>
		<?php echo $form->textField($model,'id_articulo',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->