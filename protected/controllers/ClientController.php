<?php

class ClientController extends KontoController
{
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('create','update','admin','delete','view','index', 'select', 'aclist','GetLocalitate'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Client;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Client']))
		{
			$model->attributes=$_POST['Client'];
			$model->adresa = $_POST['Client']['localitate'].', str. '.$_POST['Client']['strada'].', nr.'.$_POST['Client']['numar'];
			if ($_POST['Client']['bloc'])
				$model->adresa .= ', bl.'.$_POST['Client']['bloc'];
			if ($_POST['Client']['scara'])
				$model->adresa .= ', sc.'.$_POST['Client']['scara'];
			if ($_POST['Client']['etaj'])
				$model->adresa .= ', et.'.$_POST['Client']['etaj'];
			if ($_POST['Client']['apartament'])
				$model->adresa .= ', ap.'.$_POST['Client']['apartament'];

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Client']))
		{
			if ($_POST['Client']['data_reg_cc'] == '0000-00-00')
				$_POST['Client']['data_reg_cc'] = '';			

			if ($_POST['Client']['data_incetare_activitate'] == '0000-00-00')
				$_POST['Client']['data_incetare_activitate'] = '';			

			$model->attributes=$_POST['Client'];
			$model->adresa = $_POST['Client']['localitate'].', str. '.$_POST['Client']['strada'].', nr.'.$_POST['Client']['numar'];
			if ($_POST['Client']['bloc'])
				$model->adresa .= ', bl.'.$_POST['Client']['bloc'];
			if ($_POST['Client']['scara'])
				$model->adresa .= ', sc.'.$_POST['Client']['scara'];
			if ($_POST['Client']['etaj'])
				$model->adresa .= ', et.'.$_POST['Client']['etaj'];
			if ($_POST['Client']['apartament'])
				$model->adresa .= ', ap.'.$_POST['Client']['apartament'];
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionSelect($id)
	{
		$model=$this->loadModel($id);

		if (Yii::app()->user->hasState("crtClient"))
			Yii::app()->user->setState('crtClient', null);
		else
			Yii::app()->user->setState('crtClient', $id);

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','id'=>$model->id));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Client');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Client('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Client']))
			$model->attributes=$_GET['Client'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Client the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Client::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Client $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='client-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actions()
  {
    return array(
      'aclist'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'CodPostal', //My model's class name
        'attribute'=>'cod_postal', //The attribute of the model i will search
      ),
    );
	}

	public function actionGetLocalitate()
	{
		$cod_postal = $_POST['cp'];
		$codpostal = CodPostal::model()->find('cod_postal=:cod',array(':cod'=>$cod_postal));
		$result_arr = array();		
		if (isset($codpostal)) {
			$result_arr['localitate'] = $codpostal->localitate;
			$result_arr['strada'] = $codpostal->strada;
		}

		echo json_encode($result_arr);		
	}
}
