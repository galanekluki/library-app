<?php 


class Library {

	private array $books;
	private array $authors;
	private array $categories;
	private BorrowedBooks $borrowedBooks;

	public function __construct(array $books, array $authors, array $categories, BorrowedBooks $borrowedBooks) {

		$this->books = $books;
		$this->authors = $authors;
		$this->categories = $categories
		$this->borrowedBooks = $borrowedBooks;
	}

	public function getBooks(): array {

		return $this->books;
	}

	public function getAuthor(): array {

		return $this->authors;
	}

	public function getCategory(): array {

		return $this->categories;
	}

	public function getBorrowedBooks(): BorrowedBooks {

		return $this->borrowedBooks;
	}

	public function addBook(array $book) {

		 $this->books[] = $books;
	}

	public function findBooksByCategory() {
		
		foreach ()
	}

	public function findBookByName() {

		
	}

	public function findBooksByAuthLastName() {
		
		
}