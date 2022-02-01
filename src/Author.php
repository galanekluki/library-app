<?php 


class Author {

	private string $firstName;
	private string $lastName;
	private array $book;

	public function __construct(string $firstName, string $lastName, array $book) {

		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->book = $books;
	}

	public function getFirstName(): string {
		return $this->firstName;
	}

	public function getLastName(): string {
		return $this->lastName;
	}

	public function getBook(): array {
		return $this->book;
	}
}