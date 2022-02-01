<?php 


class Book {

	private string $name;
	private array $authors;
	private int $pages;
	private array $category;

	public function __construct(string $name, array $authors, int $pages, array $category) {

		$this->name = $name;
		$this->pages = $pages;
		$this->category = $category;
		$this->authors = $authors;
	}

	public function getName(): string {
		return $this->name;
	}

	public function getAuthors(): array {
		return $this->authors;
	}

	public function getPages(): int {
		return $this->pages;
	}

	public function getCategory(): array {
		return $this->category;
	}
}