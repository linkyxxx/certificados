<?php
/* @var $this PROVEEDORController */
/* @var $model PROVEEDOR */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PROVEEDOR_ID'); ?>
		<?php echo $form->textField($model,'PROVEEDOR_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LOTE_ID'); ?>
		<?php echo $form->textField($model,'LOTE_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->