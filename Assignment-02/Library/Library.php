<?php
namespace  Assignment02\Library;
//use Assignment02\Library\Books\EBook;
//use Assignment02\Library\Books\PrintedBook;

//$path = $_SERVER['DOCUMENT_ROOT'];

$path = "/Books/EBook.php";
$path = getcwd().$path;
require_once($path);

echo "Hello I'm Library\n";
$ebook = new EBook();
EBook::$bookCount += 1;
$ebook->setTitle("The Old Man and the Sea");
$ebook->setAuthor("Ernest Hemingway");
$ebook->setPrice(139);
$ebook->setISBN("9780099908401");
$ebook->setFormat(".pdf");
$ebook->setFileSize("40");

// print info
$ebook->displayBookDetails();
$ebook->printItemDetails($ebook);


$printedBook = new PrintedBook();
EBook::$bookCount += 1;
$printedBook->setTitle("The Prince");
$printedBook->setAuthor("Niccolo Machiavelli");
$printedBook->setPrice(72);
$printedBook->setISBN( "0140449159");
$printedBook->setPages(106);
$printedBook->setPublisher("Penguin Classics");

// print info
$printedBook->displayBookDetails();
$printedBook->printItemDetails($ebook);

// print book count
print("Total number of created books is " . EBook::$bookCount);


/*
 * - Create a script Library.php to bring together all the classes.
   • Create instances of both EBook and PrintedBook, assign values, and print
their details.
   • Use the getBookCount() method to display the total number of books
created
 */