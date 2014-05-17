<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->id_articulo,
);

$this->menu=array(
	array('label'=>'Listar Articulos', 'url'=>array('index')),
	array('label'=>'Crear Articulo', 'url'=>array('create')),
	array('label'=>'Actualizar Articulo', 'url'=>array('update', 'id'=>$model->id_articulo)),
	array('label'=>'Eliminar Articulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_articulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administra Articulo', 'url'=>array('admin')),
);
?>

<h1>Ver Articulo #<?php echo $model->id_articulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_articulo',
		'nombre_articulo',
	),
)); ?>
