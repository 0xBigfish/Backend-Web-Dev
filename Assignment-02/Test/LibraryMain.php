<?php
require_once __DIR__ . '/vendor/autoload.php';

$book = new Library\Books\Book();
$book->setTitle("MyTitle");
print($book->getTitle());