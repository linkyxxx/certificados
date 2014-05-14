<?php
/* @var $this ARTICULOController */
/* @var $model ARTICULO */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->ARTICULO_ID,
);

$this->menu=array(
	array('label'=>'List ARTICULO', 'url'=>array('index')),
	array('label'=>'Create ARTICULO', 'url'=>array('create')),
	array('label'=>'Update ARTICULO', 'url'=>array('update', 'id'=>$model->ARTICULO_ID)),
	array('label'=>'Delete ARTICULO', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ARTICULO_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ARTICULO', 'url'=>array('admin')),
);
?>

<h1>View ARTICULO #<?php echo $model->ARTICULO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ARTICULO_ID',
		'NOMBRE_ARTICULO_ID',
		'USUARIO_ID',
		'PROVEEDOR_ID',
		'TIMESTAMP',
		'PROVEEDOR_PROVEEDOR_ID',
		'TIPO_ARTICULO_TIPO_ARTICULO_ID',
		'FACTURACION_NUMERO_FACTURA_ID',
		'ARTICULOcol',
		'ARTICULOcol1',
	),
)); ?>
