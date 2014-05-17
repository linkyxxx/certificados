<?php
/* @var $this CertificadosController */
/* @var $model Certificados */

$this->breadcrumbs=array(
	'Certificadoses'=>array('index'),
	$model->id_certificados,
);

$this->menu=array(
	array('label'=>'List Certificados', 'url'=>array('index')),
	array('label'=>'Create Certificados', 'url'=>array('create')),
	array('label'=>'Update Certificados', 'url'=>array('update', 'id'=>$model->id_certificados)),
	array('label'=>'Delete Certificados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_certificados),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Certificados', 'url'=>array('admin')),
);
?>

<h1>View Certificados #<?php echo $model->id_certificados; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_certificados',
		'id_proveedor',
		'id_facturacion',
		'id_cliente',
		'id_usuario',
		'timestamp',
		'id_articulo',
	),
)); ?>
