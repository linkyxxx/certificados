<?php
/* @var $this ArticuloController */
/* @var $data Articulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_articulo), array('view', 'id'=>$data->id_articulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_articulo); ?>
	<br />


</div>