<?php 


class Category {

	private string $name;
	private Book $books;

	public function __construct(string $name, Book $books) {

		$this->name = $name;
		$this->books = $books;
	}

	public function getName(): string {

		return $this->name;
	}

	public function getBook(): Book {

		return $this->books;
	}
}