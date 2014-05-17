<?php
/* @var $this ArticuloController */
/* @var $model Articulo */
/* @var $form CActiveForm */
?>
<?php

$flashMessages = Yii::app()->user->getFlashes();
if ($flashMessages) {
    Yii::app()->clientScript->registerScript(
        'myHideEffect1',
        '$(".flash-success").animate({opacity: 1.0}, 2200).fadeOut("slow");',
        CClientScript::POS_READY
    );

    Yii::app()->clientScript->registerScript(
        'myHideEffect2',
        '$(".flash-error").animate({opacity: 1.0}, 2000).fadeOut("slow");',
        CClientScript::POS_READY
    );
    foreach($flashMessages as $key => $message) {
        echo '<div id="" class="flash-' . $key . '" style="width: 95%; text-align: center;">' . $message . "</div>";
    }
}
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'articulo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>
<fieldset>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Codigo'); ?>
		<?php echo $form->textField($model,'id_articulo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'id_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_articulo'); ?>
		<?php echo $form->textField($model,'nombre_articulo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nombre_articulo'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Guardar' : 'Actualizar',
			)); ?>
		<button type="reset" class="btn">Limpiar</button>
		<button onclick="window.history.go(-1)" class="btn" type="button">Cancelar</button>

</fieldset>



<?php $this->endWidget(); ?>

</div><!-- form -->