<?php
/* @var $this PROVEEDORController */
/* @var $model PROVEEDOR */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->PROVEEDOR_ID=>array('view','id'=>$model->PROVEEDOR_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PROVEEDOR', 'url'=>array('index')),
	array('label'=>'Create PROVEEDOR', 'url'=>array('create')),
	array('label'=>'View PROVEEDOR', 'url'=>array('view', 'id'=>$model->PROVEEDOR_ID)),
	array('label'=>'Manage PROVEEDOR', 'url'=>array('admin')),
);
?>

<h1>Update PROVEEDOR <?php echo $model->PROVEEDOR_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>