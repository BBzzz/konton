<?php 
class DocTest extends CDbTestCase
{
	public $fixtures = array(
										'docs'=>'Document',
										);

	public function testRead()
	{
		$retrievedUser = $this->docs('doc1');
		$this->assertTrue($retrievedUser instanceof Document);
		$this->assertEquals('Test',$retrievedUser->tip_doc);
	}

	public function testCRUD()
	{
		$newProject=new Document;
		$newProject->setAttributes(array(
								'client_id' => '1',
									'tip_doc' => 'Test2',
									'data_doc' => '2014-02025',
									'nr_doc' => '2',
									'fel_op' => '1',
									'valoare_doc' => '124.98',
									'loc_tranzactie' => '0',
						)
		);
		$this->assertTrue($newProject->save());
	}
}
