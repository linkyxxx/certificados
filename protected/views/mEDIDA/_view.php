<?php
/* @var $this MEDIDAController */
/* @var $data MEDIDA */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MEDIDA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MEDIDA_ID), array('view', 'id'=>$data->MEDIDA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIAMETRO')); ?>:</b>
	<?php echo CHtml::encode($data->DIAMETRO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LARGO')); ?>:</b>
	<?php echo CHtml::encode($data->LARGO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALTURA')); ?>:</b>
	<?php echo CHtml::encode($data->ALTURA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTRE_CARAS')); ?>:</b>
	<?php echo CHtml::encode($data->ENTRE_CARAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NUMERO_DE_HILOS')); ?>:</b>
	<?php echo CHtml::encode($data->NUMERO_DE_HILOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_HILO')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO_HILO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_ARTICULO_TIPO_ARTICULO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO_ARTICULO_TIPO_ARTICULO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FACTURACION_NUMERO_FACTURA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FACTURACION_NUMERO_FACTURA_ID); ?>
	<br />

	*/ ?>

</div>