<?php
/* @var $this CertificadosController */
/* @var $model Certificados */

$this->breadcrumbs=array(
	'Certificadoses'=>array('index'),
	$model->id_certificados=>array('view','id'=>$model->id_certificados),
	'Update',
);

$this->menu=array(
	array('label'=>'List Certificados', 'url'=>array('index')),
	array('label'=>'Create Certificados', 'url'=>array('create')),
	array('label'=>'View Certificados', 'url'=>array('view', 'id'=>$model->id_certificados)),
	array('label'=>'Manage Certificados', 'url'=>array('admin')),
);
?>

<h1>Update Certificados <?php echo $model->id_certificados; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>