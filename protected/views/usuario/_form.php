<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
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
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre completo'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,' Nombre usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contraseña'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo Electronico'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono / Celular'); ?>
		<?php echo $form->textField($model,'fono',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Seleccione Perfil'); ?>
		<?php echo $form->DropDownList($model,'perfil', array('1'=>'Administrador','2'=>'Usuario','3'=>'Usuario Consulta')); ?>
		<?php echo $form->error($model,'perfil'); ?>
	</div>

<fieldset>
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