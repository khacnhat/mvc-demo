<?php

require_once '../models/Book.php';
require_once 'DB.php';

/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 6/12/17
 * Time: 08:44
 */
class BookDB extends DB
{
    function listAllBooks(){
        $db = $this->connectDB();
        $results = $db->query("SELECT * FROM books");
        $books = [];
        foreach ($results as $result){
            $id = $result['id'];
            $title = $result['title'];
            $description =  $result['description'];
            $book = new Book($id, $title, $description);
            $books[] = $book;
        }
        return $books;
    }

    function addBook($book){
        $db = $this->connectDB();
        $result = $db->exec("INSERT INTO books(`title`, `description`') VALUES ('$book->title', '$book->description')");
        return $result > 0;
    }

    function isBookExists($title){
        $db = $this->connectDB();
        $results = $db->query("SELECT * FROM books WHERE title = '$title'");
        return count($results) > 0;
    }
}