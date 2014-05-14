<?php
/* @var $this USUARIOController */
/* @var $data USUARIO */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUARIO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USUARIO_ID), array('view', 'id'=>$data->USUARIO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_COMPLETO')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_COMPLETO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERFIL')); ?>:</b>
	<?php echo CHtml::encode($data->PERFIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASS')); ?>:</b>
	<?php echo CHtml::encode($data->PASS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CORREO')); ?>:</b>
	<?php echo CHtml::encode($data->CORREO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FONO')); ?>:</b>
	<?php echo CHtml::encode($data->FONO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TIMESTAMP')); ?>:</b>
	<?php echo CHtml::encode($data->TIMESTAMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FACTURACION_NUMERO_FACTURA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FACTURACION_NUMERO_FACTURA_ID); ?>
	<br />

	*/ ?>

</div>