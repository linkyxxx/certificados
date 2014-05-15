<?php
/* @var $this ARTICULOController */
/* @var $model ARTICULO */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->ARTICULO_ID=>array('view','id'=>$model->ARTICULO_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ARTICULO', 'url'=>array('index')),
	array('label'=>'Create ARTICULO', 'url'=>array('create')),
	array('label'=>'View ARTICULO', 'url'=>array('view', 'id'=>$model->ARTICULO_ID)),
	array('label'=>'Manage ARTICULO', 'url'=>array('admin')),
);
?>

<h1>Actualizar ARTICULO <?php echo $model->ARTICULO_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>