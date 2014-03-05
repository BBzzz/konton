<?php
class EAutoCompleteAction extends CAction
{
    public $model;
    public $attribute;
    private $results = array();
 
    public function run()
    {
        if(isset($this->model) && isset($this->attribute)) {
						$attributes = explode (',',$this->attribute);
						$filterby_field = $attributes[0];
						if ($attributes[0] != $this->attribute)
							$text_field = $attributes[1];
						else $text_field = '';
            $criteria = new CDbCriteria();
            $criteria->compare($filterby_field, $_GET['term'], true);
            $model = new $this->model;
            foreach($model->findAll($criteria) as $m)
            {
							if ($text_field)
                $this->results[] = array(
										'label'=>$m->{$filterby_field},
										'name'=>$m->{$text_field}
								);
		//						$this->results[$m->{$filterby_field}] = $m->{$text_field};
							else
								$this->results[] = $m->{$filterby_field};
            }
 
        }
        echo CJSON::encode($this->results);
    }
}
