<?php 
class CodTest extends CDbTestCase
{
	public $fixtures = array(
										'coduri'=>'TipCoduriUzuale',
										);

	public function testGetCodOptions()
	{
		$options = $this->fel_cod;
		$this->assertTrue(is_array($options));
		$this->assertTrue(count($options) > 0);
	}
}
