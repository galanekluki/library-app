<?php 


class Book {

	private string $name;
	private array $authors;
	private array $pages;
	private string $category;
}

class Author {

	private string $firstName;
	private string $lastName;
	private array $books;
}

class Category {

	private string $name;
	private array $books;
}

class Library {

	private array $books;
	private array $authors;
	private array $categories;
	private array $BorrowedBooks;

	public function addBook() {

		 
	}

	public function findBooksByCategory() {
		

	}
}

class Reader {

	private string $firstName;
	private string $lastName;
}


class BorrowedBooks {

	private Reader $reader;
	private Book $book;
	private string $borrowDate;
	private string $returnDate;

}

$library = new Library();
var_dump($library);
$book = new Book();
var_dump($book);