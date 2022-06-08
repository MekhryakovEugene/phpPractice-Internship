<?php

class Book{
    private $bookName;
    private $bookAuthor;

    public function __construct($name, $author){
        $this->bookName = $name;
        $this->bookAuthor = $author;
    }
    public function getNameAndAuthor(){
        return $this->bookName . ' - ' . $this->bookAuthor;
    }
}

class BookFactory{
    public static function create($name, $author){
        return new Book($name, $author);
    }
}

$bookTest = BookFactory::create('No Longer Human', 'Osamu Dazai');

echo $bookTest->getNameAndAuthor();