<?php 


class BorrowedBooks {

	private Reader $reader;
	private array $books;
	private string $borrowDate;
	private string $returnDate;

	public function __construct(Reader $reader, array $books, string $borrowDate, string $returnDate) {

		$this->reader = $reader;
		$this->books = $book;
		$this->borrowedDate =$borrowDate;
		$this->returnDate =$returnDate;
}

	public function getReader(): Reader {

		return $this->reader;
	}

	public function getBooks(): array {

		return $this->books;
	} 

	public function getBorrowDate(): string {

		return $this->borrowDate;
	}

	public function getReturnDate(): string {

		return $this->returnDate;
	}



}