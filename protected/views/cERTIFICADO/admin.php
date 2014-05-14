<?php
/* @var $this CERTIFICADOController */
/* @var $model CERTIFICADO */

$this->breadcrumbs=array(
	'Certificados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CERTIFICADO', 'url'=>array('index')),
	array('label'=>'Create CERTIFICADO', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#certificado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Certificados</h1>

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
	'id'=>'certificado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CERTIFICADO_ID',
		'ARTICULO_ID',
		'TIPO_ARTICULO_ID',
		'CLIENTE_ID',
		'USUARIO_ID',
		'TIMESTAMP',
		/*
		'CLIENTE_CLIENTE_ID',
		'PROVEEDOR_PROVEEDOR_ID',
		'USUARIO_USUARIO_ID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
