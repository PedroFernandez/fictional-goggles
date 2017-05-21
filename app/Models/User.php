<?php

namespace App\Models;

class User
{
	private $first_name;

	private $second_name;

	private $email;		

	public function setFirstName($firstName)
	{
		$this->first_name = trim($firstName);
	}

	public function getFirstName()
	{
		return $this->first_name;
	}

	public function setSecondName($secondName)
	{
		$this->second_name = trim($secondName);
	}

	public function getSecondName()
	{
		return $this->second_name;
	}

	public function getFullName()
	{
		return "$this->first_name $this->second_name";
	}

	public function setEmail($email)
	{
		$this->email = trim($email);
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getEmailVariables()
	{
		return [
			'full_name' => $this->getFullName(),
			'email' => $this->getEmail(),
		];
	}
}
