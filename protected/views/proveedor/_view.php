<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proveedor), array('view', 'id'=>$data->id_proveedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lote')); ?>:</b>
	<?php echo CHtml::encode($data->id_lote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_colada')); ?>:</b>
	<?php echo CHtml::encode($data->id_colada); ?>
	<br />


</div>