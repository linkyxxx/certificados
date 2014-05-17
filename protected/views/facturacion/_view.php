<?php
/* @var $this FacturacionController */
/* @var $data Facturacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_facturacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_facturacion), array('view', 'id'=>$data->id_facturacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->id_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />


</div>