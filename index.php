<?php 


require_once "src/Book.php";
require_once "src/Author.php";
require_once "src/Category.php";
require_once "src/Library.php";
require_once "src/Reader.php";
require_once "src/BorrowedBook.php";
require_once "src/Database.php";

/*$library = new Library();
var_dump($library);
$book = new Book();
var_dump($book);
$category = new Category();
var_dump($category);
$author = new Author();
var_export($author);
$reader = new Reader();
var_dump($reader); */

$comedyCategory = new Category('Komedia', []);
$comedyCategory1 = new Category('Komedia', []);
$author = new Author('Janek', 'Testowy', []);
$author2 = new Author('Jacques', 'Mollier', []);
$funnyBook = new Book('Szatan w 3 klasie.', [$author], 321, $comedyCategory);
$funnyBook1 = new Book('Swietoszek', [$author2], 60, $comedyCategory1);
$library = new Library([$funnyBook],[$author],[$comedyCategory], []);
$allComedyBooks = $library->findBooksByCategoryName('Komedia');
var_dump($allComedyBooks);
var_dump($funnyBook);

$adventureCategory = new Category('Adventure', []);
var_dump($adventureCategory);
$author1 = new Author('Alexander', 'Dumas', []);
$adventureBook = new Book('Hrabia Monte Christo', [$author1], 444, $adventureCategory);
var_dump($adventureBook->getPages());
$library1 = new Library([$adventureBook], [$author1], [$adventureCategory], []);
$allAdventureBooks = $library1->findBooksByAuthLastName('Dumas');
var_dump($allAdventureBooks);
$borrowedBook = new BorrowedBook(new Reader('Lukasz', 'Galan'), new Book('W Pustyni i w puszczy', [$author2], 444, new Category('Horror', [])), 
	'22-01-2022', '29-01-2022');
$library->addBook($adventureBook);
var_dump($library1->addBook($adventureBook));
var_dump($library->addBook($funnyBook));
var_dump($borrowedBook);
$host = 'mysql';
$database = 'library'
$username = 'root';
$password = '123';
$port = 3306;

$database = new Database($host, $username, $password, $database, $port);

$database->insert('book', ['name', 'pages', 'category_id'], ['Fajna ksiazka', 120, 1]); // nic nie zwraca ale rekord powinien sie pojawic w bazie



