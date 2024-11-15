<?php
require_once __DIR__ . '/Books/TestBook.php';

echo "Hello I'm Test\n";
$book = new TestBook();
$book->setPrice(10);
echo $book->getPrice();