<?php 


class Author {

	private string $firstName;
	private string $lastName;
	private Book $books;

	public function __construct(string $firstName, string $lastName, Book $books) {

		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->books = $books;
	}

	public function getFirstName(): string {
		return $this->firstName;
	}

	public function getLastName(): string {
		return $this->lastName;
	}

	public function getBook(): Book {
		return $this->books;
	}
}