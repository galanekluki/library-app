<?php 


class Author {

	private string $firstName;
	private string $lastName;
	private array $books;

	public function __construct(string $firstName, string $lastName) {

		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->books = [];
	}
}