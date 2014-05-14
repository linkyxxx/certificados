<?php
/* @var $this FACTURACIONController */
/* @var $data FACTURACION */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NUMERO_FACTURA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NUMERO_FACTURA_ID), array('view', 'id'=>$data->NUMERO_FACTURA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_ARTICULO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_ARTICULO')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO_ARTICULO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MEDIDA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MEDIDA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLIENTE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CLIENTE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIMESTAMP')); ?>:</b>
	<?php echo CHtml::encode($data->TIMESTAMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CERTIFICADO_CERTIFICADO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CERTIFICADO_CERTIFICADO_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CLIENTE_CLIENTE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CLIENTE_CLIENTE_ID); ?>
	<br />

	*/ ?>

</div>