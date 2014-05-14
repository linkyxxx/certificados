<?php
/* @var $this CLIENTEController */
/* @var $data CLIENTE */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLIENTE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CLIENTE_ID), array('view', 'id'=>$data->CLIENTE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RAZON_SOCIAL')); ?>:</b>
	<?php echo CHtml::encode($data->RAZON_SOCIAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIRECCION_FACTURACION')); ?>:</b>
	<?php echo CHtml::encode($data->DIRECCION_FACTURACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUCURSAL')); ?>:</b>
	<?php echo CHtml::encode($data->SUCURSAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GIRO')); ?>:</b>
	<?php echo CHtml::encode($data->GIRO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FONO')); ?>:</b>
	<?php echo CHtml::encode($data->FONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MAIL')); ?>:</b>
	<?php echo CHtml::encode($data->MAIL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_CONTACTO')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_CONTACTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIMESTAMP')); ?>:</b>
	<?php echo CHtml::encode($data->TIMESTAMP); ?>
	<br />

	*/ ?>

</div>