<?php
class Book {
    public $title;
    public $isAvailable;
    public $author;


    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = true; 
    }

    public function borrowBook() {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            echo "You have borrowed \"{$this->title}\".<br>";
        } else {
            echo "\"{$this->title}\" is unavailable.<br>";
        }
    }

    public function returnBook() {
        $this->isAvailable = true;
        echo "You have returned \"{$this->title}\".<br>";
    }

    public function getInfo() {
        $availability = $this->isAvailable ? 'Available' : 'Unavailable';
        return "{$this->title} by {$this->author} - {$availability}";
    }
}
?>
