<?php
/* @var $this ArticuloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articulos',
);

$this->menu=array(
	array('label'=>'Crear Articulo', 'url'=>array('create')),
	array('label'=>'Administrar Articulos', 'url'=>array('admin')),
);
?>

<h1>Articulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
