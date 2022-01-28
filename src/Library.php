<?php 


class Library {

	private Book $books;
	private Author $authors;
	private Category $categories;
	private BorrowedBooks $borrowedBooks;

	public function __construct(Book $books, Author $authors, Category $categories, BorrowedBooks $borrowedBooks) {

		$this->books = $books;
		$this->authors = $authors;
		$this->categories = $categories
		$this->borrowedBooks = $borrowedBooks;
	}

	public function getBook(): Book {

		return $this->books;
	}

	public function getAuthor(): Author {

		return $this->authors;
	}

	public function getCategory(): Category {

		return $this->categories;
	}

	public function getBorrowedBooks(): BorrowedBooks {

		return $this->borrowedBooks;
	}

	public function addBook(Book $books) {

		 $this->books[] = $books;
	}

	public function findBooksByCategory(Category $categories, ) {
		
		

	}
}