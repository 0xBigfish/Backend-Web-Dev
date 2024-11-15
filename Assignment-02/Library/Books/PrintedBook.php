<?php

namespace Assignment02\Library\Books;

class PrintedBook extends Book
{
    private $pages;
    private $publisher;

    public function displayBookDetails()
    {
        Book::displayBookDetails();
        print("Pages: " . $this->pages . "\n");
        print("Publisher: " . $this->publisher . "\n");
    }

    public function calculateLateFees(int $daysLate): float
    {
        return $daysLate;
    }

    public function getDetails(): array
    {
        $arr = parent::getDetails();
        $arr += ["Pages" => $this->pages, "Publisher" => $this->publisher];
        return $arr;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function setPages(int $pages)
    {
        $this->pages = $pages;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setPublisher(string $publisher)
    {
        $this->publisher = $publisher;
    }
}