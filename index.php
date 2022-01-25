<?php 


require_once "src/Book.php";
require_once "src/Author.php";
require_once "src/Category.php";
require_once "src/Library.php";
require_once "src/Reader.php";
require_once "src/BorrowedBooks.php";

$library = new Library();
var_dump($library);
$book = new Book();
var_dump($book);
$category = new Category();
var_dump($category);
$author = new Author();
var_export($author);
$reader = new Reader();
var_dump($reader);