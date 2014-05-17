<?php
/* @var $this CertificadosController */
/* @var $data Certificados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_certificados')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_certificados), array('view', 'id'=>$data->id_certificados)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_facturacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_facturacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->id_articulo); ?>
	<br />


</div>