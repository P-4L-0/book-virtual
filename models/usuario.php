<?php
require_once __DIR__ . '/../database/connection.php';
/**
 * Summary of Usuario
 * Modelo para el usuario
 */
class Usuario{

    private PDO $db; 

    public function __construct(){
        $this->db = Connection::connection();
    }
    public function crear(){
        $stmt = $this->db->prepare("INSERT INTO user() VALUES (?)");
        $stmt->bind_param("?");
        return $stmt->execute(); 
    }

    public function obtener(){
        
    }

    public function auth($email, $password){
        $stmt = $this->db->prepare("SELECT email, password FROM user where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if($user && password_verify($password, $user['password'],)){
            return $user;
        }

        return NULL; 
    }

    public function __destruct(){
        Connection::disconnect();
    }


}

//https://www.php.net/manual/en/book.pdo.php

?>