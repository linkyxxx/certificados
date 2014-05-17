<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Crear Articulo',
);

$this->menu=array(
	array('label'=>'Listar Articulos', 'url'=>array('index')),
	array('label'=>'Administrar Articulos', 'url'=>array('admin')),
);
?>

<h1>Crear Articulo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>