<?php 
class Library{
     public $books = []; 

     public function addBook(Book $book) {
     
          $this->books[] = $book;
          echo "done add \"{$book->title}\" to the Library .<br>";

     }
  public function listBooks() {
    
      foreach($this->books as $book)
      {
            echo $book->getInfo() . "<br>";

      }

  } 
   public function findBook($title) {

       foreach($this->books as $book){

          if( strtolower($book->title) == strtolower($title))  {
    
              return $book;
          }
       }

       return null;
    
   }

     
}
?>