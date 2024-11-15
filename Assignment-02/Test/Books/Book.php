<?php

namespace Assignment02\Test\Books;

class Book
{
    public $title;

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
}