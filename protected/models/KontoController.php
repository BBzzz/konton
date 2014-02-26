<?php

class KontoController extends Controller
{
	public $layout='//layouts/column2';

	public function checkVisible($date){
		if ($date == '0000-00-00')
			return false;
		else	return true;
	}

	public function formatRoDate($date){
		return Yii::app()->dateFormatter->format('dd.MM.yyyy',$date); 
	}
}
