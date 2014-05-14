<?php
/* @var $this PROVEEDORController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proveedors',
);

$this->menu=array(
	array('label'=>'Create PROVEEDOR', 'url'=>array('create')),
	array('label'=>'Manage PROVEEDOR', 'url'=>array('admin')),
);
?>

<h1>Proveedors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
