<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
	protected $user;
	public function setUp()
	{
		$this->user = new App\Models\User;
	}

	/** @test */
	public function that_we_can_get_first_name()
	{
		$this->user->setFirstName('Pedro');

		$this->assertEquals('Pedro', $this->user->getFirstName());
	}

	public function testThatWeCanGetSecondName()
	{
		$this->user->setSecondName('Fernandez');

		$this->assertEquals('Fernandez', $this->user->getSecondName());
	}

	public function testThatWeCanGetFullName()
	{
		$this->user->setFirstName('Pedro');
		$this->user->setSecondName('Fernandez');

		$this->assertEquals('Pedro Fernandez', $this->user->getFullName());
	}

	public function testFirstAndSecondNameAreTrimmed()
	{
		$this->user->setFirstName('       Pedro ');
		$this->user->setSecondName('   Fernandez    ');

		$this->assertEquals('Pedro Fernandez', $this->user->getFullName());
	}

	public function testEmailCanBeSet()
	{
		$this->user->setEmail('pedrosoftwareqa@gmail.com');

		$this->assertEquals('pedrosoftwareqa@gmail.com', $this->user->getEmail());
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$this->user->setFirstName('Pedro');
		$this->user->setSecondName('Fernandez');
		$this->user->setEmail('pedrosoftwareqa@gmail.com');

		$emailVariables = $this->user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals('Pedro Fernandez', $emailVariables['full_name']);
		$this->assertEquals('pedrosoftwareqa@gmail.com', $emailVariables['email']);
	}
}
