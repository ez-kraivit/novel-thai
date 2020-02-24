<?php

class Database{
    private static $host = "localhost";
    private static $db_name = "novel-thai";
    private static $username = "root";
    private static $password = "";
    private static $conn;

    public static function connect(){
        self::$conn = NULL;
        try{ 
            self::$conn = new PDO("mysql:host=".self::$host.";dbname=".self::$db_name.";charset=UTF8",self::$username,self::$password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(Exception $e){
            echo "Connection fail :" .$e->getMessage();
        }
       return self::$conn;
    }  
    public static function disconnect(){
		self::$conn = null;
	}
}

