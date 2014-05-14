<?php
/* @var $this CERTIFICADOController */
/* @var $model CERTIFICADO */

$this->breadcrumbs=array(
	'Certificados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CERTIFICADO', 'url'=>array('index')),
	array('label'=>'Manage CERTIFICADO', 'url'=>array('admin')),
);
?>

<h1>Create CERTIFICADO</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>