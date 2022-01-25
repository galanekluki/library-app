<?php 


class Library {

	private array $books;
	private array $authors;
	private array $categories;
	private array $BorrowedBooks;

	public function addBook(Book $books) {

		 $this->books[] = $books;
	}

	public function findBooksByCategory() {
		
		

	}
}