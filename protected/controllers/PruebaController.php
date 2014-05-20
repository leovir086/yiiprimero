<?php
Class PruebaController extends Controller
{
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$model=Prueba::model();
		$prueba=$model->findAll();
		//$prueba='esto si es una prueba';
		$this->render('index',array('prueba'=>$prueba));
	}
	public function actionView($id){
		$model=Prueba::model()->findByPk($id);
		$this->render('view',array('model'=>$model));
	}
	public function actionEdit($id){
		$model=Prueba::model()->findByPk($id); // es como hacer un select de tu registro
		
		if(isset($_POST['Prueba'])){ //validamos si trae algun valor en el formulario
		
		$model->attributes=$_POST['Prueba'];//se asigna los valores del formulario a la clase
		if($model->save()) //esto es como hacer un update prueba WHERE id=(el ci de pruebas)
			$this->redirect(array('view','id'=>$model->ci));//es como hacer un header
		}
		$this->render('edit',array('model'=>$model));
		
	}
        public function actionAdd(){
		$model=new Prueba(); // es como hacer un select de tu registro
		
		if(isset($_POST['Prueba'])){ //validamos si trae algun valor en el formulario
		
		$model->attributes=$_POST['Prueba'];//se asigna los valores del formulario a la clase
		if($model->save()) //esto es como hacer un update prueba WHERE id=(el ci de pruebas)
			$this->redirect(array('view','id'=>$model->ci));//es como hacer un header
		}
		$this->render('add',array('model'=>$model));
		
	}
        public function actionDelete($id){
            $model=Prueba::model()->findByPk($id);
            $model->delete();
            $this->redirect(array('index'));
        }
}