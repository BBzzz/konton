<?php

class DataRo extends CComponent
{

	public function formatRoDate($date)
	{
		return Yii::app()->dateFormatter->format('dd.MM.yyyy',$date); 
	}
}
