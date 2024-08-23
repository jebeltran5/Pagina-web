<?php
require_once(__DIR__ . '/Database.php');

class Connection{

    protected static $conn;

    protected function __construct(){
         
    }

    public static function connect(){
        global $url, $password, $username, $db;

        if(!empty(self::$conn)){
           return self::$conn;
        }        

        try {
            self::$conn = new PDO("mysql:host=$url; dbname=$db; charset=utf8", $username, $password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            exit();
        }
        return self::$conn;
        
    }
}