<?php
/* @var $this ProveedorxarticuloController */
/* @var $model Proveedorxarticulo */

$this->breadcrumbs=array(
	'Proveedorxarticulos'=>array('index'),
	$model->id_proveedorxarticulo=>array('view','id'=>$model->id_proveedorxarticulo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proveedorxarticulo', 'url'=>array('index')),
	array('label'=>'Create Proveedorxarticulo', 'url'=>array('create')),
	array('label'=>'View Proveedorxarticulo', 'url'=>array('view', 'id'=>$model->id_proveedorxarticulo)),
	array('label'=>'Manage Proveedorxarticulo', 'url'=>array('admin')),
);
?>

<h1>Update Proveedorxarticulo <?php echo $model->id_proveedorxarticulo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>