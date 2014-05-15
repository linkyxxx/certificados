<?php
if(isset($mensajeOk)){
	if($mensajeOk != ""){
?>
<script type="text/javascript">
$(document).ready(function(){
    window.setInterval(function() {
    	document.location.href = '<?php echo Yii::app()->request->baseUrl."index.php?r=site/login"; ?>';
    }, 5000); 
})
</script>
<?php 
	}
}
?>

<h1>Enviar nueva contraseña</h1><br />



<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'reset-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row-fluid">
		<?php echo CHtml::label('Ingrese su e-mail',''); ?>
		<?php echo CHtml::textField('correo','',array('maxlength'=>50,'class'=>'span3')); ?>
		<?php if(isset($mensajeError)){
			echo '<div class="help-block error">'.$mensajeError.'</div>';
		} 

		if(isset($mensajeOk)){
			echo $mensajeOk;
		}?>
	</div>
	<div class="form-actions">
		<?php //echo CHtml::submitButton('Enviar'); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Enviar', 'type'=>'primary')); ?>
	</div>
<?php $this->endWidget(); ?>


