<?php
/* @var $this PROVEEDORController */
/* @var $model PROVEEDOR */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->PROVEEDOR_ID,
);

$this->menu=array(
	array('label'=>'List PROVEEDOR', 'url'=>array('index')),
	array('label'=>'Create PROVEEDOR', 'url'=>array('create')),
	array('label'=>'Update PROVEEDOR', 'url'=>array('update', 'id'=>$model->PROVEEDOR_ID)),
	array('label'=>'Delete PROVEEDOR', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PROVEEDOR_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PROVEEDOR', 'url'=>array('admin')),
);
?>

<h1>View PROVEEDOR #<?php echo $model->PROVEEDOR_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PROVEEDOR_ID',
		'LOTE_ID',
		'ARTICULO_ID',
		'CANTIDAD',
		'NOMBRE_ARTICULO_ID',
		'TIMESTAMP',
	),
)); ?>
