<?php 


class Library {

	private array $books;
	private array $authors;
	private array $categories;

	public function __construct(array $books, array $authors, array $categories) {

		$this->books = $books;
		$this->authors = $authors;
		$this->categories = $categories;
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

	public function addBook(array $book): void {

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
	public function findBookByName(string $name): array {
 
 		$foundBooks = [];
		foreach ($this->books as $book) {
			if ($book->getName() == $name) {
				$foundBooks = $book;
			}
		}

		return $foundBooks;
	}

	public function findBooksByAuthLastName(string $lastName): array {
		
		$foundBooks = [];
		foreach($this->books as $book) {
			if ($book->getAuthor()->getLastName() == $lastName) {
				$foundBooks = $book;
			}
		}

		return $foundBooks;
	}

}