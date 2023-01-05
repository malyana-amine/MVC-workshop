<?php

class DbConnection
{
    public static function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$servername;dbname=poljokesgen", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            // echo ($conn);
           
             return $conn;
        } catch (PDOException $e) {
            die('db error');
        }
    }
}