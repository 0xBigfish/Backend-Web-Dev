<?php

namespace Assignment02\Library\Books;
$path = "/Book.php";
$path = getcwd().$path;
require_once($path);

class EBook extends Book
{
    private $fileSize;
    private $format;

    public function displayBookDetails()
    {
        Book::displayBookDetails();
        print("File size: " . $this->fileSize . "\n");
        print("Format: " . $this->format . "\n");
    }

    public function calculateLateFees(int $daysLate): float
    {
        // e-book can not be returned late. Access is terminated at end of contract.
        return 0;
    }

    public function getDetails(): array
    {
        $arr = parent::getDetails();
        $arr += ["File size" => $this->fileSize, "Format" => $this->format];
        return $arr;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize)
    {
        $this->fileSize = $fileSize;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat(string $format)
    {
        $this->format = $format;
    }
}