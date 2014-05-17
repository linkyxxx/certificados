<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	$model->id_facturacion,
);

$this->menu=array(
	array('label'=>'List Facturacion', 'url'=>array('index')),
	array('label'=>'Create Facturacion', 'url'=>array('create')),
	array('label'=>'Update Facturacion', 'url'=>array('update', 'id'=>$model->id_facturacion)),
	array('label'=>'Delete Facturacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_facturacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facturacion', 'url'=>array('admin')),
);
?>

<h1>View Facturacion #<?php echo $model->id_facturacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_facturacion',
		'id_articulo',
		'id_cliente',
	),
)); ?>
