<?php
/* @var $this PROVEEDORController */
/* @var $model PROVEEDOR */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	'Crear Proveedor',
);

$this->menu=array(
	array('label'=>'Listar Proveedores', 'url'=>array('index')),
	array('label'=>'Administar Proveedores', 'url'=>array('admin')),
);
?>

<h1>Crear Proveedor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>