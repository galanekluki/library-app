<?php 




class Reader {

	private string $firstName;
	private string $lastName;

	public function __construct(string $firstName, string $lastName) {

		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function getFirstName() {

		return $this->firstName;
	}

	public function getLastName() {

		return $this->lastName;
	}
}

