<?php
/* @var $this MEDIDAController */
/* @var $model MEDIDA */

$this->breadcrumbs=array(
	'Medidas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MEDIDA', 'url'=>array('index')),
	array('label'=>'Manage MEDIDA', 'url'=>array('admin')),
);
?>

<h1>Create MEDIDA</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>