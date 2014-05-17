<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->id_articulo=>array('view','id'=>$model->id_articulo),
	'Actualizar Articulo',
);

$this->menu=array(
	array('label'=>'Listar Articulos', 'url'=>array('index')),
	array('label'=>'Crear Articulo', 'url'=>array('create')),
	array('label'=>'Ver Articulo', 'url'=>array('view', 'id'=>$model->id_articulo)),
	array('label'=>'Administrar Articulos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Articulo <?php echo $model->id_articulo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>