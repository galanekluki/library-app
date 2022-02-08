<?php 


class Library {

	private array $books;
	private array $authors;
	private array $categories;
	private array $borrowedBooks;

	public function __construct(array $books, array $authors, array $categories, array $borrowedBooks) {

		$this->books = $books;
		$this->authors = $authors;
		$this->categories = $categories;
		$this->borrowedBooks = $borrowedBooks;
	}

	public function getBooks(): array {

		return $this->books;
	}

	public function getAuthors(): array {

		return $this->authors;
	}

	public function getCategory(): array {

		return $this->categories;
	}

	public function getBorrowBook(): array {

		return $this->borrowedBooks;
	}

	public function addBook(Book $book): void {

		 $this->books[] = $book;
	}

	public function findBooksByCategoryName(string $categoryName): array {
        $foundBooks = [];
        foreach ($this->books as $book) {
            if ($book->getCategory()->getName() == $categoryName) {
                $foundBooks[] = $book;
            }
        }

        return $foundBooks;
	}
	public function findBooksByTitle(string $title): array {
 
 		$foundBooks = [];
		foreach ($this->books as $book) {
			if ($book->getTitle() == $title) {
				$foundBooks[]= $book;
			}
		}

		return $foundBooks;
	}

	public function findBooksByAuthLastName(string $lastName): array {
		
		$foundBooks = [];
		foreach($this->books as $book) {
			foreach($book->getAuthors() as $author) {
				if ($author->getLastName() == $lastName) {
					$foundBooks[] = $book;
				}
			}
		}

		return $foundBooks;
	}

}