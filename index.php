<?php 

   require 'Book.php';
   require 'Library.php';

  // create library
   $lib = new Library();
     
   $book1 = new Book("book1","auth1");
   $book2 = new Book("book2","auth2");
   $book3 = new Book("book3","auth3");
   $book4 = new Book("book4","auth4");

    // Add multiple Book objects to library.
   $lib->addBook($book1);
   $lib->addBook($book2);
   $lib->addBook($book3);
   $lib->addBook($book4);

      //Display all books in the library.
      echo "List books in library .<br>";
         $lib->listBooks();
   
   
     //Borrow a book ( for example book1) and display the updated list of books.     
     echo "borrow book1 .<br> ";
      $b = $lib->findBook("book1");
   if($b != null) {

      $b->borrowBook();
   }
   
   echo "updated list of books after borrow book .<br>";
   $lib->listBooks();

  
      //Return the borrowed book and display the updated list again.
      echo "Return book1 .<br>";
       $b->returnBook();

       echo "updated list of books after return book .<br>";
   $lib->listBooks();
 

       
      

?>