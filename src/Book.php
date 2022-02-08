<?php 


class Book {

	private string $title;
	private array $authors;
	private int $pages;
	private Category $category;

	public function __construct(string $title, array $authors, int $pages, Category $category) {

		$this->title = $title;
		$this->pages = $pages;
		$this->authors = $authors;
		$this->category = $category;
	}

	public function getTitle(): string {
		return $this->title;
	}

	public function getAuthors(): array {
		return $this->authors;
	}

	public function getPages(): int {
		return $this->pages;
	}

	public function getCategory(): Category {
		return $this->category;
	}
}