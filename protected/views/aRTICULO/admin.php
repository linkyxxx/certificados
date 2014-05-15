<?php
/* @var $this ARTICULOController */
/* @var $model ARTICULO */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ARTICULO', 'url'=>array('index')),
	array('label'=>'Create ARTICULO', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articulo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Articulos</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articulo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ARTICULO_ID',
		'NOMBRE_ARTICULO_ID',
		'USUARIO_ID',
		'PROVEEDOR_ID',
		'TIMESTAMP',
		'PROVEEDOR_PROVEEDOR_ID',
		/*
		'TIPO_ARTICULO_TIPO_ARTICULO_ID',
		'FACTURACION_NUMERO_FACTURA_ID',
		'ARTICULOcol',
		'ARTICULOcol1',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
