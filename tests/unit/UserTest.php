<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
	
	public function testThatWeCanGetFirstName()
	{
		$user = new App\Models\User;

		$user->setFirstName('Pedro');

		$this->assertEquals('Pedro', $user->getFirstName());
	}

	public function testThatWeCanGetSecondName()
	{
		$user = new App\Models\User;

		$user->setSecondName('Fernandez');

		$this->assertEquals('Fernandez', $user->getSecondName());
	}

	public function testThatWeCanGetFullName()
	{
		$user = new App\Models\User;

		$user->setFirstName('Pedro');
		$user->setSecondName('Fernandez');

		$this->assertEquals('Pedro Fernandez', $user->getFullName());
	}

	public function testFirstAndSecondNameAreTrimmed()
	{
		$user = new App\Models\User;

		$user->setFirstName('       Pedro ');
		$user->setSecondName('   Fernandez    ');

		$this->assertEquals('Pedro Fernandez', $user->getFullName());
	}

	public function testEmailCanBeSet()
	{
		$user = new App\Models\User;

		$user->setEmail('pedrosoftwareqa@gmail.com');

		$this->assertEquals('pedrosoftwareqa@gmail.com', $user->getEmail());
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new App\Models\User;

		$user->setFirstName('Pedro');
		$user->setSecondName('Fernandez');
		$user->setEmail('pedrosoftwareqa@gmail.com');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals('Pedro Fernandez', $emailVariables['full_name']);
		$this->assertEquals('pedrosoftwareqa@gmail.com', $emailVariables['email']);
	}
}
