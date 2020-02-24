<?php

class Users extends Model{

    public static $table_name = "user" ;
    public static $field_name = [ "nane","last_name","email","tel" ,"address","password"] ;

    public static function register($nane,$last_name,$email,$tel,$address,$password){
       $ss = self::insert([ 
            "nane" => $nane,
            "last_name" => $last_name,
            "email" => $email,
            "tel"  => $tel,
            "address" => $address,
            "password" => password_hash($password,PASSWORD_DEFAULT),
        ]); 

        print_r($ss);
    }

    /*
    public static function register($nane,$last_name,$email,$tel,$address,$password){
       
        try {
            $hasPass = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` ( `nane`, `last_name`, `email`, `tel`, `address`, `password`) 
            VALUES (:nane, :last_name, :email, :tel, :address, :password);";
            $stmt = Database::connect()->prepare($sql);
            $stmt->bindparam("nane",$nane);
            $stmt->bindparam("last_name",$last_name);
            $stmt->bindparam("email",$email);
            $stmt->bindparam("tel",$tel);
            $stmt->bindparam("address",$address);
            $stmt->bindparam("password",$hasPass);
            $stmt->execute(); 
            return [
                "status" => "succes",
                "message" => "Register successfuly"
            ];

        } catch (Exception $e) {
            return [
                "status" => "error",
                "message" => $e->getMessage()
            ];
             
        }
    }
    */
}