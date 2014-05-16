<?php
/* @var $this PROVEEDORController */
/* @var $model PROVEEDOR */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PROVEEDOR', 'url'=>array('index')),
	array('label'=>'Manage PROVEEDOR', 'url'=>array('admin')),
);
?>

<h1>Create PROVEEDOR</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>