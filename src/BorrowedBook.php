<?php 


class BorrowedBook {

	private Reader $reader;
	private array $book;
	private string $borrowDate;
	private string $returnDate;

	public function __construct(Reader $reader, array $book, string $borrowDate, string $returnDate) {

		$this->reader = $reader;
		$this->book = $book;
		$this->borrowedDate =$borrowDate;
		$this->returnDate =$returnDate;
}

	public function getReader(): Reader {

		return $this->reader;
	}

	public function getBook(): array {

		return $this->book;
	} 

	public function getBorrowDate(): string {

		return $this->borrowDate;
	}

	public function getReturnDate(): string {

		return $this->returnDate;
	}

}