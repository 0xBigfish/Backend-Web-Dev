<?php

require_once("./Books/Book.php");

$book = new \Assignment02\Test\Books\Book();
$book->setTitle("MyTitle");
print($book->getTitle());
