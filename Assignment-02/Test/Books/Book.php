<?php

namespace Assignment02\Test\Books;

class Book
{
    public $title;

    public function set(string $title){
        $this->title = $title;
    }

    public function get(){
        return $this->title;
    }
}