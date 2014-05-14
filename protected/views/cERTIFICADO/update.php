<?php
/* @var $this CERTIFICADOController */
/* @var $model CERTIFICADO */

$this->breadcrumbs=array(
	'Certificados'=>array('index'),
	$model->CERTIFICADO_ID=>array('view','id'=>$model->CERTIFICADO_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List CERTIFICADO', 'url'=>array('index')),
	array('label'=>'Create CERTIFICADO', 'url'=>array('create')),
	array('label'=>'View CERTIFICADO', 'url'=>array('view', 'id'=>$model->CERTIFICADO_ID)),
	array('label'=>'Manage CERTIFICADO', 'url'=>array('admin')),
);
?>

<h1>Update CERTIFICADO <?php echo $model->CERTIFICADO_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>