<?php
/* @var $this MEDIDAController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medidas',
);

$this->menu=array(
	array('label'=>'Create MEDIDA', 'url'=>array('create')),
	array('label'=>'Manage MEDIDA', 'url'=>array('admin')),
);
?>

<h1>Medidas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
