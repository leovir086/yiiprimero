<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo CHtml::encode($this->pageTitle).' - '.Yii::app()->params['lael']; ?></title>

    <!-- Bootstrap -->
    <!--link href="css/bootstrap.min.css" rel="stylesheet"-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" media="screen, projection" />
    
    <!-- Estilos de slider-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/estilos.css" media="screen, projection" />
    <script language="JavaScript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js" type="text/javascript"></script>
    <script language="JavaScript" type="text/javascript">
    <!--
    setTamAviso( 130 );
    setNumAvisos( 7 );
    timerID = setTimeout("moverAvisos()", 1000);         
    -->
    </script>
    <!--fin de slider-->
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      
    <div class="container">
        <!--div class="row">
            <div class="col-xs-12">
                <h1><?php //echo CHtml::encode(Yii::app()->name); ?></h1>
                 <p><?php //echo Yii::app()->params['lael']; ?></p>
            </div>
        </div-->
        
        <div class="row columna">
            <div class="col-xs-12">
                <div class="nav">
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                                array('label'=>'Inicio', 'url'=>array('/site/index')),
                                array('label'=>'Audios', 'url'=>array('/site/contact'),
                                    'items'=>array(
                                            array('label'=>'Videos', 'url'=>array('/site/index')),
                                            array('label'=>'Audio', 'url'=>array('/site/page', 'view'=>'about')),

                                    ),     
                                ),
                                array('label'=>'Videos', 'url'=>array('/site/page', 'view'=>'about'),
                                    'items'=>array(
                                            array('label'=>'Videos', 'url'=>array('/site/index')),
                                            array('label'=>'Audio', 'url'=>array('/site/page', 'view'=>'about')),

                                    ),
                                ),

                                array('label'=>'Interactivos', 'url'=>array('/site/contact'),
                                    'items'=>array(
                                            array('label'=>'Videos', 'url'=>array('/site/index')),
                                            array('label'=>'Audio', 'url'=>array('/site/page', 'view'=>'about')),

                                    ),
                                ),

                                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        ),
                    )); ?>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 columna">
                        <?php echo CHtml::image(Yii::app()->theme->baseUrl."/image/sarahjulianne.jpg"); ?>
                </div>
        </div>
        <!--div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 columna">
                        <?//php echo $content; ?>
                </div>
        </div-->
        <div class="row">
            <!--div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h1>columna 2</h1>
            </div-->
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 columna">
                <?php echo $content; ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h1>columna 2</h1>
            </div>
            
        </div>
    </div>
      
    <div class="bs-docs-header" id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h1>Mision</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan 
                        et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget definition.</p>

                    <!--div id="carbonads-container"><div class="carbonad"><div id="azcarbon"></div><script>var z = document.createElement("script"); z.async = true; z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script></div></div-->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h1>Vision</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan 
                        et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget definition.</p>
                    <!--div id="carbonads-container"><div class="carbonad"><div id="azcarbon"></div><script>var z = document.createElement("script"); z.async = true; z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script></div></div-->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h1>Objetivos</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan 
                        et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget definition.</p>
                    <!--div id="carbonads-container"><div class="carbonad"><div id="azcarbon"></div><script>var z = document.createElement("script"); z.async = true; z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script></div></div-->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h1>Registrate</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan 
                        et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget definition.</p>

                    <!--div id="carbonads-container"><div class="carbonad"><div id="azcarbon"></div><script>var z = document.createElement("script"); z.async = true; z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script></div></div-->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h1>Nuestras oficinas</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan 
                        et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget definition.</p>
                    <!--div id="carbonads-container"><div class="carbonad"><div id="azcarbon"></div><script>var z = document.createElement("script"); z.async = true; z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script></div></div-->
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
