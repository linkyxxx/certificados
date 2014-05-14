<?php
/* @var $this CERTIFICADOController */
/* @var $model CERTIFICADO */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CERTIFICADO_ID'); ?>
		<?php echo $form->textField($model,'CERTIFICADO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_ARTICULO_ID'); ?>
		<?php echo $form->textField($model,'TIPO_ARTICULO_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUARIO_ID'); ?>
		<?php echo $form->textField($model,'USUARIO_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIMESTAMP'); ?>
		<?php echo $form->textField($model,'TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLIENTE_CLIENTE_ID'); ?>
		<?php echo $form->textField($model,'CLIENTE_CLIENTE_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROVEEDOR_PROVEEDOR_ID'); ?>
		<?php echo $form->textField($model,'PROVEEDOR_PROVEEDOR_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUARIO_USUARIO_ID'); ?>
		<?php echo $form->textField($model,'USUARIO_USUARIO_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->