<?php 


class Library {

	private array $book;
	private array $authors;
	private array $categories;
	private BorrowedBooks $borrowedBooks;

	public function __construct(array $book, array $authors, array $categories, BorrowedBooks $borrowedBooks) {

		$this->book = $books;
		$this->authors = $authors;
		$this->categories = $categories
		$this->borrowedBooks = $borrowedBooks;
	}

	public function getBook(): array {

		return $this->book;
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

	public function addBook(Book $book) {

		 $this->book[] = $books;
	}

	public function findBooksByCategory(Category $categories,  $book) {
		
		
	}

	public function findBookByName(Author $authors, Book $books) {

		
	}

	public function findBooksByAuthLastName(Author $authors, Book $books) {
		
		
}