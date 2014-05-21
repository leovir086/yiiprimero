<?php 
Class SaludoController extends Controller
{
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$saludo='hola es una prueba de yii';
		$this->render('index',array('saludo'=>$saludo));
	}

}