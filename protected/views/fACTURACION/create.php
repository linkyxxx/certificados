<?php
/* @var $this FACTURACIONController */
/* @var $model FACTURACION */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FACTURACION', 'url'=>array('index')),
	array('label'=>'Manage FACTURACION', 'url'=>array('admin')),
);
?>

<h1>Create FACTURACION</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>