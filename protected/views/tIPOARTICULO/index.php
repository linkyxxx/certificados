<?php
/* @var $this TIPOARTICULOController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipoarticulos',
);

$this->menu=array(
	array('label'=>'Create TIPOARTICULO', 'url'=>array('create')),
	array('label'=>'Manage TIPOARTICULO', 'url'=>array('admin')),
);
?>

<h1>Tipoarticulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
