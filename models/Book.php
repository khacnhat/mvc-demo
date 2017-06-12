<?php

/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 6/12/17
 * Time: 08:42
 */
class Book
{
    public $id;
    public $title;
    public $description;

    function __construct($id = 0, $title = NULL, $description = NULL)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }
}