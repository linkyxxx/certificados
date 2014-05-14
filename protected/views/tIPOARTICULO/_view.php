<?php
/* @var $this TIPOARTICULOController */
/* @var $data TIPOARTICULO */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TIPO_ARTICULO_ID), array('view', 'id'=>$data->TIPO_ARTICULO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RECUBRIMIENTO')); ?>:</b>
	<?php echo CHtml::encode($data->RECUBRIMIENTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MEDIDA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MEDIDA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIMESTAMP')); ?>:</b>
	<?php echo CHtml::encode($data->TIMESTAMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FACTURACION_NUMERO_FACTURA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FACTURACION_NUMERO_FACTURA_ID); ?>
	<br />


</div>