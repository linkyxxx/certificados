<?php
/* @var $this FACTURACIONController */
/* @var $model FACTURACION */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	$model->NUMERO_FACTURA_ID,
);

$this->menu=array(
	array('label'=>'List FACTURACION', 'url'=>array('index')),
	array('label'=>'Create FACTURACION', 'url'=>array('create')),
	array('label'=>'Update FACTURACION', 'url'=>array('update', 'id'=>$model->NUMERO_FACTURA_ID)),
	array('label'=>'Delete FACTURACION', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NUMERO_FACTURA_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FACTURACION', 'url'=>array('admin')),
);
?>

<h1>View FACTURACION #<?php echo $model->NUMERO_FACTURA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NUMERO_FACTURA_ID',
		'NOMBRE_ARTICULO_ID',
		'TIPO_ARTICULO',
		'MEDIDA_ID',
		'CLIENTE_ID',
		'TIMESTAMP',
		'CERTIFICADO_CERTIFICADO_ID',
		'CLIENTE_CLIENTE_ID',
	),
)); ?>
