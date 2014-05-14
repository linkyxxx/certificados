<?php
/* @var $this MEDIDAController */
/* @var $model MEDIDA */

$this->breadcrumbs=array(
	'Medidas'=>array('index'),
	$model->MEDIDA_ID=>array('view','id'=>$model->MEDIDA_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MEDIDA', 'url'=>array('index')),
	array('label'=>'Create MEDIDA', 'url'=>array('create')),
	array('label'=>'View MEDIDA', 'url'=>array('view', 'id'=>$model->MEDIDA_ID)),
	array('label'=>'Manage MEDIDA', 'url'=>array('admin')),
);
?>

<h1>Update MEDIDA <?php echo $model->MEDIDA_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>