<?php 
class UserTest extends CDbTestCase
{
	public $fixtures = array(
										'users'=>'Utilizator',
										);

	public function testRead()
	{
		$retrievedUser = $this->users('user1');
		$this->assertTrue($retrievedUser instanceof Utilizator);
		$this->assertEquals('Test_User_One',$retrievedUser->username);
	}

	public function testCRUD()
	{
		//Create a new user
		$newProject=new Utilizator;
		$newProject->setAttributes(array(
								'email' => 'test2@notanaddress.com',
								'username' => 'Test_User_Four',
								'password' => MD5('test4'),
								'create_time' => new CDbExpression('NOW()'),
						)
		);
		$this->assertTrue($newProject->save(false));
	}
}
