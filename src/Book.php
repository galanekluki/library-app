<?php 


class Book
{
	private string $name;
	private array $authors;
	private int $pages;
	private Category $category;

	public function __construct(string $name, array $authors, int $pages, Category $category)
    {
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

	public function getCategory(): Category
    {
		return $this->category;
	}
}
