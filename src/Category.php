<?php 


class Category {

	private string $name;
	private array $books;

	public function __construct(string $name) {

		$this->name = $name;
		$this->books = [];
	}


}