<?php
/* @var $this TIPOARTICULOController */
/* @var $model TIPOARTICULO */

$this->breadcrumbs=array(
	'Tipoarticulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TIPOARTICULO', 'url'=>array('index')),
	array('label'=>'Manage TIPOARTICULO', 'url'=>array('admin')),
);
?>

<h1>Create TIPOARTICULO</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>