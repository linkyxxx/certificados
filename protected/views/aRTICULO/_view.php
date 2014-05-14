<?php
/* @var $this ARTICULOController */
/* @var $data ARTICULO */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ARTICULO_ID), array('view', 'id'=>$data->ARTICULO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_ARTICULO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUARIO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USUARIO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROVEEDOR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PROVEEDOR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIMESTAMP')); ?>:</b>
	<?php echo CHtml::encode($data->TIMESTAMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROVEEDOR_PROVEEDOR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PROVEEDOR_PROVEEDOR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_ARTICULO_TIPO_ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO_ARTICULO_TIPO_ARTICULO_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FACTURACION_NUMERO_FACTURA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FACTURACION_NUMERO_FACTURA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICULOcol')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICULOcol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICULOcol1')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICULOcol1); ?>
	<br />

	*/ ?>

</div>