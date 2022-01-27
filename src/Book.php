<?php 


class Book {

	private string $name;
	private array $authors;
	private array $pages;
	private string $category;

	public function __construct(string $name) {

		$this->name = $name;
		$this->authors = [];
	}
}