<?php

namespace Library\Books;
use Library\LibraryItem;

class Book extends LibraryItem
{
    public $title;

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDetails(): array {
        return array();
    }

    public function calculateLateFees(int $daysLate): float {
        return 1.2;
    }
}