<!DOCTYPE html>
<html >
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
	<meta name="language" content="en" />
        
        <!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/foundation.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="print" />
	
        
        <title><?php echo CHtml::encode($this->pageTitle).' - '.Yii::app()->params['empresa']; ?></title>
        
   		<!--script src="js/vendor/modernizr.js"></script-->
    </head>

<body>
<div class="row">
    <div class="large-12">
        <div><?php echo CHtml::encode(Yii::app()->name); ?></div>
    </div><!-- header -->
</div>
<!--div class="fondo"> </div>
<div class="row">
	<div class="large-12">
    	<h1>Plataforma LAEL</h1>
    </div>
</div-->
<div class="row">
        <div class="large-12">
            <nav class="top-bar" data-topbar>
                <div id="mainmenu">
                    <?php $this->widget('zii.widgets.CMenu',array(
                                'items'=>array(
                                        array('label'=>'Inicio', 'url'=>array('/site/index')),
                                        array('label'=>'Contenido', 'url'=>array('/site/contact')),
                                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                        
                                        array('label'=>'Contenido', 'url'=>array('/site/contact'),
                                            /*'items'=>array(
                                                    array('label'=>'Videos', 'url'=>array('/site/index')),
                                                    array('label'=>'Audio', 'url'=>array('/site/page', 'view'=>'about')),

                                            ),*/
                                        ),
                                        
                                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                ),
                    )); ?>
                  
                <!--nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="#">Inicio</a></h1>
                        </li> 
                    </ul>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="#">Contactos</a></h1>
                        </li> 
                    </ul>
                </nav-->
                </div><!-- mainmenu -->
            </nav-->  
        </div>        
</div>
<div class="row">
	<div class="panel">   	
        <div class="row">
	        	<div class="large-4 medium-4 columns">
                	<img alt="hola" src="img/índice.jpg" />
	    			<p><a href="#">Ingles</a><br />Ve los contenidos multimedias de este es una prueba de Ingles</p>
	    		</div>
	        	<div class="large-4 medium-4 columns">
                	<img alt="hola" src="img/índice.jpg" />
	        		<p><a href="#">Frances</a><br />Ve los contenidos multimedias de este es una prueba de Frances</p>
	        	</div>
	        	<div class="large-4 medium-4 columns">
                	<img alt="hola" src="img/índice.jpg" />
	        		<p><a href="#">Qhechua</a><br />Ve los contenidos multimedias de este es una prueba de Quechua</p>
	        	</div>        
		</div>
    </div>
</div>

 <div class="row">
    <div class="medium-3 columns colorRojo">
    	<h1>column 1</h1>
        <a href="#" class="button">Default Button</a>
    </div>
    <div class="medium-6 columns">
    	<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4"> 
        	<li><img alt="hola" src="img/comet-th.jpg" /></li> 
            <li><img alt="hola" src="img/earth-th.jpg" /></li> 
            <li><img alt="hola" src="img/launch-th.jpg" /></li> 
            <li><img alt="hola" src="img/satelite-th.jpg" /></li> 
            <li><img alt="hola" src="img/space-th.jpg" /></li> 
        </ul>
    </div>
    <div class="medium-3 columns">
    	<ul class="small-block-grid-3"> 
        	<li><img alt="hola" src="img/comet-th.jpg" /></li> 
            <li><img alt="hola" src="img/earth-th.jpg" /></li> 
            <li><img alt="hola" src="img/launch-th.jpg" /></li> 
            <li><img alt="hola" src="img/satelite-th.jpg" /></li> 
            <li><img alt="hola" src="img/space-th.jpg" /></li> 
        </ul>
    </div>
 </div>
 <div class="row"><h1> </h1></div>
 <div class="fondoazul"> </div>	
<div class="fondo"> </div>	
</body>
</html>
