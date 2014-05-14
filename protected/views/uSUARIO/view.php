<?php
/* @var $this USUARIOController */
/* @var $model USUARIO */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->USUARIO_ID,
);

$this->menu=array(
	array('label'=>'List USUARIO', 'url'=>array('index')),
	array('label'=>'Create USUARIO', 'url'=>array('create')),
	array('label'=>'Update USUARIO', 'url'=>array('update', 'id'=>$model->USUARIO_ID)),
	array('label'=>'Delete USUARIO', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->USUARIO_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage USUARIO', 'url'=>array('admin')),
);
?>

<h1>View USUARIO #<?php echo $model->USUARIO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'USUARIO_ID',
		'NOMBRE_COMPLETO',
		'PERFIL',
		'USUARIO',
		'PASS',
		'CORREO',
		'FONO',
		'TIMESTAMP',
		'FACTURACION_NUMERO_FACTURA_ID',
	),
)); ?>
