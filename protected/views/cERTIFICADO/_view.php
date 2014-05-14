<?php
/* @var $this CERTIFICADOController */
/* @var $data CERTIFICADO */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CERTIFICADO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CERTIFICADO_ID), array('view', 'id'=>$data->CERTIFICADO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICULO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO_ARTICULO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLIENTE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CLIENTE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUARIO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USUARIO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIMESTAMP')); ?>:</b>
	<?php echo CHtml::encode($data->TIMESTAMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLIENTE_CLIENTE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CLIENTE_CLIENTE_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PROVEEDOR_PROVEEDOR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PROVEEDOR_PROVEEDOR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUARIO_USUARIO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USUARIO_USUARIO_ID); ?>
	<br />

	*/ ?>

</div>