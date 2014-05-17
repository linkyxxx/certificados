<?php
/* @var $this ProveedorxarticuloController */
/* @var $model Proveedorxarticulo */

$this->breadcrumbs=array(
	'Proveedorxarticulos'=>array('index'),
	$model->id_proveedorxarticulo,
);

$this->menu=array(
	array('label'=>'List Proveedorxarticulo', 'url'=>array('index')),
	array('label'=>'Create Proveedorxarticulo', 'url'=>array('create')),
	array('label'=>'Update Proveedorxarticulo', 'url'=>array('update', 'id'=>$model->id_proveedorxarticulo)),
	array('label'=>'Delete Proveedorxarticulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proveedorxarticulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proveedorxarticulo', 'url'=>array('admin')),
);
?>

<h1>View Proveedorxarticulo #<?php echo $model->id_proveedorxarticulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proveedorxarticulo',
		'id_proveedor',
		'articulo_id_articulo',
	),
)); ?>
