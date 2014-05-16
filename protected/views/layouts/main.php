<?php 
Yii::app()->clientscript
/* @var $this Controller */ ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=8"> 
    <META http-equiv="Page-Enter" CONTENT="RevealTrans(Duration=4,Transition=21)">
    <meta name="description" content="Sistema de Registro y Control de Documentos de Garantía">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="author" content="Cristopher Ponce - Juan Benjamin Espinoza">
    <title><?php echo Yii::app()->name; ?></title>



	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	<?php echo Yii::app()->bootstrap->register(); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>

<div class="container" id="page">
<header>
	<figure id="logo1">
		<img src="./images/footer.jpg">
		<div id="nombre"><?//php echo CHtml::encode(Yii::app()->name); ?></div>
	</figure>
	
</header>
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				 array('label'=>'Inicio','icon'=>'home', 'url'=>array('site/index'), 'visible'=>!Yii::app()->user->isGuest),    
                array('label'=>'Login', 'icon'=>'user','url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Menu Usuario', 'icon'=>'user', 'url'=>'#', 'items'=> array(
                    array('label'=>' - Nuevo Provvedor','url'=>array('proveedor/create')),
                    array('label'=>' - Administrar Provveedor','url'=>array('proveedor/admin')),
                    array('label'=>' - Crear Articulo','url'=>array('articulo/create')),
                    array('label'=>' - Administrar Articulos','url'=>array('articulo/admin')),
                ), 'visible'=>!Yii::app()->user->isGuest),
                 array('label'=>'Menu Administrador', 'icon'=>'cog', 'url'=>'#', 'items'=> array(
                    array('label'=>' - Crear Usuario', 'url'=>array('usuario/create')),
                    array('label'=>' - Administrar Usuario', 'url'=>array('usuario/admin')),
                ), 'visible'=>!Yii::app()->user->isGuest),

                array('label'=>'Contacto', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),

        ),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
<footer>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> .<br/>
		Todos los Derechos Reservados.<br/>
		<?//php echo Yii::powered(); ?>
	</div><!-- footer -->
</footer>
</div><!-- page -->

</body>
</html>
