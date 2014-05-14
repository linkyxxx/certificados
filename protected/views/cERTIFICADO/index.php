<?php
/* @var $this CERTIFICADOController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Certificados',
);

$this->menu=array(
	array('label'=>'Create CERTIFICADO', 'url'=>array('create')),
	array('label'=>'Manage CERTIFICADO', 'url'=>array('admin')),
);
?>

<h1>Certificados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
