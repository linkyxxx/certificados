<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->CLIENTE_ID=>array('view','id'=>$model->CLIENTE_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List CLIENTE', 'url'=>array('index')),
	array('label'=>'Create CLIENTE', 'url'=>array('create')),
	array('label'=>'View CLIENTE', 'url'=>array('view', 'id'=>$model->CLIENTE_ID)),
	array('label'=>'Manage CLIENTE', 'url'=>array('admin')),
);
?>

<h1>Update CLIENTE <?php echo $model->CLIENTE_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>