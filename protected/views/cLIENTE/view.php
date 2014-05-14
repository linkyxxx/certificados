<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->CLIENTE_ID,
);

$this->menu=array(
	array('label'=>'List CLIENTE', 'url'=>array('index')),
	array('label'=>'Create CLIENTE', 'url'=>array('create')),
	array('label'=>'Update CLIENTE', 'url'=>array('update', 'id'=>$model->CLIENTE_ID)),
	array('label'=>'Delete CLIENTE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CLIENTE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CLIENTE', 'url'=>array('admin')),
);
?>

<h1>View CLIENTE #<?php echo $model->CLIENTE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CLIENTE_ID',
		'RAZON_SOCIAL',
		'DIRECCION_FACTURACION',
		'SUCURSAL',
		'GIRO',
		'FONO',
		'MAIL',
		'NOMBRE_CONTACTO',
		'TIMESTAMP',
	),
)); ?>
