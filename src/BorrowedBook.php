<?php 


class BorrowedBook {

	private Reader $reader;
	private Book $book;
	private string $borrowDate;
	private string $returnDate;

	public function __construct(Reader $reader, Book $book, string $borrowDate, string $returnDate) {

		$this->reader = $reader;
		$this->book = $book;
		$this->borrowedDate =$borrowDate;
		$this->returnDate =$returnDate;
}

	public function getReader(): Reader {

		return $this->reader;
	}

	public function getBook(): Book {

		return $this->book;
	} 

	public function getBorrowDate(): string {

		return $this->borrowDate;
	}

	public function getReturnDate(): string {

		return $this->returnDate;
	}
}