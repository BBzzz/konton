<?php
abstract class DocumenteActiveRecord extends KontoActiveRecord
{
	public function defaultScope()
  {
  	return array(
    	'condition'=>"client_id=".Yii::app()->user->getState("crtClient"),
    );
  }
}
