<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id_usuario=>array('view','id'=>$model->id_usuario),
	'Actualizar Usuario',
);

$this->menu=array(
	array('label'=>'Listar Usuario', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id_usuario)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Datos de Usuario <?php echo $model->id_usuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>