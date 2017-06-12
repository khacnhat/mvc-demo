<?php

require_once "../db/BookDB.php";
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 6/12/17
 * Time: 08:58
 */
class BookController
{
    function showBooks(){
        $bookDB = new BookDB();
        $books = $bookDB->listAllBooks();
        include ('../views/book/list.php');
    }

    function addBook(){
        $db = new BookDB();

        $title = $_POST['title'];
        $description = $_POST['description'];
        if(!empty($title) && !empty($description)){
            /* Kierm tra ton tai*/
            if($db->isBookExists($title)){
                $message = 'Loi ton tai';
            } else{
                $book = new Book(0, $title, $description);
                $db->addBook($book);
            }
        } else {
            $message = "Error ....";
        }
    }
}