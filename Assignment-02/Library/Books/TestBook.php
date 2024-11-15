<?php

require_once __DIR__ . "/../LibraryItem.php";

class TestBook extends LibraryItem
{
    public static $bookCount = 0;
    private $title;
    private $author;
    private $price;
    private $ISBN;

    static public function getBookCount(): int
    {
        return self::$bookCount;
    }

    public function displayBookDetails()
    {
        print("Title: " . $this->title . "\n");
        print("Author: " . $this->author . "\n");
        print("Price: " . $this->price . "\n");
        print("ISBN: " . $this->ISBN . "\n");
    }

    public function getDetails(): array
    {
        return array(
            "title" => $this->title,
            "author" => $this->author,
            "price" => $this->price,
            "ISBN" => $this->ISBN
        );
    }

    public function calculateLateFees(int $daysLate): float
    {
        return 0.5 * $daysLate;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getISBN(): string
    {
        return $this->ISBN;
    }

    public function setISBN(string $ISBN)
    {
        $this->ISBN = $ISBN;
    }
}