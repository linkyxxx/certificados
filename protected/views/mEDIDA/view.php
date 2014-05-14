<?php
/* @var $this MEDIDAController */
/* @var $model MEDIDA */

$this->breadcrumbs=array(
	'Medidas'=>array('index'),
	$model->MEDIDA_ID,
);

$this->menu=array(
	array('label'=>'List MEDIDA', 'url'=>array('index')),
	array('label'=>'Create MEDIDA', 'url'=>array('create')),
	array('label'=>'Update MEDIDA', 'url'=>array('update', 'id'=>$model->MEDIDA_ID)),
	array('label'=>'Delete MEDIDA', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MEDIDA_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MEDIDA', 'url'=>array('admin')),
);
?>

<h1>View MEDIDA #<?php echo $model->MEDIDA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MEDIDA_ID',
		'DIAMETRO',
		'LARGO',
		'ALTURA',
		'ENTRE_CARAS',
		'NUMERO_DE_HILOS',
		'TIPO_HILO',
		'TIPO_ARTICULO_TIPO_ARTICULO_ID',
		'FACTURACION_NUMERO_FACTURA_ID',
	),
)); ?>
