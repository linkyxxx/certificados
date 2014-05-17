<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Facturacion', 'url'=>array('index')),
	array('label'=>'Manage Facturacion', 'url'=>array('admin')),
);
?>

<h1>Create Facturacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>