<?php
class Book
{
    private string $bookName;
    private string $bookAuthor;

    public function __construct($name, $author)
	{
        $this->bookName = $name;
        $this->bookAuthor = $author;
    }
    public function get_name_and_author(): string
	{
        return $this->bookName . ' - ' . $this->bookAuthor;
    }
}

class BookFactory
{
    public static function create($name, $author): Book
	{
        return new Book($name, $author);
    }
}

$bookTest = BookFactory::create('No Longer Human', 'Osamu Dazai');

echo $bookTest->get_name_and_author();