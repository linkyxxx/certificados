<?php
/* @var $this ProveedorxarticuloController */
/* @var $model Proveedorxarticulo */

$this->breadcrumbs=array(
	'Proveedorxarticulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proveedorxarticulo', 'url'=>array('index')),
	array('label'=>'Manage Proveedorxarticulo', 'url'=>array('admin')),
);
?>

<h1>Create Proveedorxarticulo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>