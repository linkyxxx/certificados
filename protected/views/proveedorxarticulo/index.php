<?php
/* @var $this ProveedorxarticuloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proveedorxarticulos',
);

$this->menu=array(
	array('label'=>'Create Proveedorxarticulo', 'url'=>array('create')),
	array('label'=>'Manage Proveedorxarticulo', 'url'=>array('admin')),
);
?>

<h1>Proveedorxarticulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
