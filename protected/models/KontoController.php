<?php

class KontoController extends Controller
{
	public $layout='//layouts/column2';
	private $_client = null;

	public function checkVisible($date)
	{
		if ($date == '0000-00-00')
			return false;
		else	return true;
	}

	public function formatRoDate($date)
	{
		return Yii::app()->dateFormatter->format('dd.MM.yyyy',$date); 
	}

	public function filterclientContext($filterChain)
	{
		//set the project identifier based on either the GET or POST input
		//request variables, since we allow both types for our actions
		$clientId = null;
		if (Yii::app()->user->hasState("crtClient"))
			$clientId = Yii::app()->user->getState("crtClient");
		$this->loadClient($clientId);
		//complete the running of other filters and execute the requested action
		$filterChain->run();
	}

	protected function loadClient($client_id)
	{
		//if the project property is null, create it based on input id
		if($this->_client===null)
		{
			$this->_client=Client::model()->findbyPk($client_id);
			if($this->_client===null)
			{
				throw new CHttpException(404,'Clientul nu a fost specificat!');
			}
		}
		return $this->_client;
	}
}
