<?php
/* @var $this TIPOARTICULOController */
/* @var $model TIPOARTICULO */

$this->breadcrumbs=array(
	'Tipoarticulos'=>array('index'),
	$model->TIPO_ARTICULO_ID=>array('view','id'=>$model->TIPO_ARTICULO_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TIPOARTICULO', 'url'=>array('index')),
	array('label'=>'Create TIPOARTICULO', 'url'=>array('create')),
	array('label'=>'View TIPOARTICULO', 'url'=>array('view', 'id'=>$model->TIPO_ARTICULO_ID)),
	array('label'=>'Manage TIPOARTICULO', 'url'=>array('admin')),
);
?>

<h1>Update TIPOARTICULO <?php echo $model->TIPO_ARTICULO_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>