<?php 


class Category {

	private string $name;
	private array $book;

	public function __construct(string $name, array $book) {

		$this->name = $name;
		$this->book = $books;
	}

	public function getName(): string {

		return $this->name;
	}

	public function getBook(): array {

		return $this->book;
	}
}