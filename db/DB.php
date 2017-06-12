<?php

/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 6/12/17
 * Time: 08:47
 */
class DB
{
    protected function connectDB(){
        $db = new PDO("", "", "");
        return $db;
    }
}