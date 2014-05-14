<?php
/* @var $this PROVEEDORController */
/* @var $data PROVEEDOR */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROVEEDOR_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PROVEEDOR_ID), array('view', 'id'=>$data->PROVEEDOR_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOTE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->LOTE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICULO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CANTIDAD')); ?>:</b>
	<?php echo CHtml::encode($data->CANTIDAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_ARTICULO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIMESTAMP')); ?>:</b>
	<?php echo CHtml::encode($data->TIMESTAMP); ?>
	<br />


</div>