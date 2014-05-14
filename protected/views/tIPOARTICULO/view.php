<?php
/* @var $this TIPOARTICULOController */
/* @var $model TIPOARTICULO */

$this->breadcrumbs=array(
	'Tipoarticulos'=>array('index'),
	$model->TIPO_ARTICULO_ID,
);

$this->menu=array(
	array('label'=>'List TIPOARTICULO', 'url'=>array('index')),
	array('label'=>'Create TIPOARTICULO', 'url'=>array('create')),
	array('label'=>'Update TIPOARTICULO', 'url'=>array('update', 'id'=>$model->TIPO_ARTICULO_ID)),
	array('label'=>'Delete TIPOARTICULO', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TIPO_ARTICULO_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TIPOARTICULO', 'url'=>array('admin')),
);
?>

<h1>View TIPOARTICULO #<?php echo $model->TIPO_ARTICULO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TIPO_ARTICULO_ID',
		'RECUBRIMIENTO',
		'MEDIDA_ID',
		'TIMESTAMP',
		'FACTURACION_NUMERO_FACTURA_ID',
	),
)); ?>
