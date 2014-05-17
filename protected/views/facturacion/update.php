<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	$model->id_facturacion=>array('view','id'=>$model->id_facturacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facturacion', 'url'=>array('index')),
	array('label'=>'Create Facturacion', 'url'=>array('create')),
	array('label'=>'View Facturacion', 'url'=>array('view', 'id'=>$model->id_facturacion)),
	array('label'=>'Manage Facturacion', 'url'=>array('admin')),
);
?>

<h1>Update Facturacion <?php echo $model->id_facturacion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>