<?php
/* @var $this FacturacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facturacions',
);

$this->menu=array(
	array('label'=>'Create Facturacion', 'url'=>array('create')),
	array('label'=>'Manage Facturacion', 'url'=>array('admin')),
);
?>

<h1>Facturacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
