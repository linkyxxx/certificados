<?php
/* @var $this TIPOARTICULOController */
/* @var $model TIPOARTICULO */

$this->breadcrumbs=array(
	'Tipoarticulos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TIPOARTICULO', 'url'=>array('index')),
	array('label'=>'Create TIPOARTICULO', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipoarticulo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tipoarticulos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipoarticulo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'TIPO_ARTICULO_ID',
		'RECUBRIMIENTO',
		'MEDIDA_ID',
		'TIMESTAMP',
		'FACTURACION_NUMERO_FACTURA_ID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
