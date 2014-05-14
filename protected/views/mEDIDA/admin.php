<?php
/* @var $this MEDIDAController */
/* @var $model MEDIDA */

$this->breadcrumbs=array(
	'Medidas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MEDIDA', 'url'=>array('index')),
	array('label'=>'Create MEDIDA', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#medida-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Medidas</h1>

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
	'id'=>'medida-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'MEDIDA_ID',
		'DIAMETRO',
		'LARGO',
		'ALTURA',
		'ENTRE_CARAS',
		'NUMERO_DE_HILOS',
		/*
		'TIPO_HILO',
		'TIPO_ARTICULO_TIPO_ARTICULO_ID',
		'FACTURACION_NUMERO_FACTURA_ID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
