<?php 


class Category {

	private string $name;
	private array $books;

	public function __construct(string $name, array $books) {

		$this->name = $name;
		$this->books = $books;
	}

	public function getName(): string {

		return $this->name;
	}

	public function getBooks(): array {

		return $this->books;
	}
}