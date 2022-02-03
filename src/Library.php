<?php 


class Library
{
    /** @var Book[]  */
	private array $books;
	private array $authors;
	private array $categories;

	public function __construct(array $books, array $authors, array $categories)
    {
		$this->books = $books;
		$this->authors = $authors;
		$this->categories = $categories;
	}

	public function getBooks(): array
    {
		return $this->books;
	}

	public function getAuthor(): array
    {
		return $this->authors;
	}

	public function getCategory(): array
    {
		return $this->categories;
	}

	public function addBook(array $book): void
    {
        $this->books[] = $book;
	}

	public function findBooksByCategoryName(string $categoryName): array
    {
        $foundBooks = [];
        foreach ($this->books as $book) {
            if ($book->getCategory()->getName() == $categoryName) {
                $foundBooks[] = $book;
            }
        }

        return $foundBooks;
	}

	public function findBookByName()
    {
        //TODO: implement body of method
	}

	public function findBooksByAuthLastName()
    {
        //TODO: implement body of method
    }
}