<?php
/* @var $this ProveedorxarticuloController */
/* @var $data Proveedorxarticulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedorxarticulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proveedorxarticulo), array('view', 'id'=>$data->id_proveedorxarticulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulo_id_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->articulo_id_articulo); ?>
	<br />


</div>