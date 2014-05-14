<?php
/* @var $this USUARIOController */
/* @var $model USUARIO */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->USUARIO_ID=>array('view','id'=>$model->USUARIO_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List USUARIO', 'url'=>array('index')),
	array('label'=>'Create USUARIO', 'url'=>array('create')),
	array('label'=>'View USUARIO', 'url'=>array('view', 'id'=>$model->USUARIO_ID)),
	array('label'=>'Manage USUARIO', 'url'=>array('admin')),
);
?>

<h1>Update USUARIO <?php echo $model->USUARIO_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>