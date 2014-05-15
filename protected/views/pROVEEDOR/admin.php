<?php
/* @var $this PROVEEDORController */
/* @var $model PROVEEDOR */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	'Administrar Proveedores',
);

$this->menu=array(
	array('label'=>'Listar Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proveedor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de Proveedores</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proveedor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PROVEEDOR_ID',
		'LOTE_ID',
		'ARTICULO_ID',
		'CANTIDAD',
		'NOMBRE_ARTICULO_ID',
		'TIMESTAMP',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
