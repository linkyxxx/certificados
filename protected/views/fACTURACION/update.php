<?php
/* @var $this FACTURACIONController */
/* @var $model FACTURACION */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	$model->NUMERO_FACTURA_ID=>array('view','id'=>$model->NUMERO_FACTURA_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FACTURACION', 'url'=>array('index')),
	array('label'=>'Create FACTURACION', 'url'=>array('create')),
	array('label'=>'View FACTURACION', 'url'=>array('view', 'id'=>$model->NUMERO_FACTURA_ID)),
	array('label'=>'Manage FACTURACION', 'url'=>array('admin')),
);
?>

<h1>Update FACTURACION <?php echo $model->NUMERO_FACTURA_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>