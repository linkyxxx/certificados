<?php
/* @var $this CERTIFICADOController */
/* @var $model CERTIFICADO */

$this->breadcrumbs=array(
	'Certificados'=>array('index'),
	$model->CERTIFICADO_ID,
);

$this->menu=array(
	array('label'=>'List CERTIFICADO', 'url'=>array('index')),
	array('label'=>'Create CERTIFICADO', 'url'=>array('create')),
	array('label'=>'Update CERTIFICADO', 'url'=>array('update', 'id'=>$model->CERTIFICADO_ID)),
	array('label'=>'Delete CERTIFICADO', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CERTIFICADO_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CERTIFICADO', 'url'=>array('admin')),
);
?>

<h1>View CERTIFICADO #<?php echo $model->CERTIFICADO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CERTIFICADO_ID',
		'ARTICULO_ID',
		'TIPO_ARTICULO_ID',
		'CLIENTE_ID',
		'USUARIO_ID',
		'TIMESTAMP',
		'CLIENTE_CLIENTE_ID',
		'PROVEEDOR_PROVEEDOR_ID',
		'USUARIO_USUARIO_ID',
	),
)); ?>
