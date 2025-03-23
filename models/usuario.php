<?php
require_once __DIR__ . '/../database/connection.php';
/**
 * Summary of Usuario
 * Modelo para el usuario
 */
class Usuario
{

    private PDO $db;

    public function __construct()
    {
        $this->db = Connection::connection();
    }
    public function crear($nombre, $apellido, $email, $password)
    {
        $stmt = $this->db->prepare("INSERT INTO usuarios(nombre, apellido, email, contraseña) VALUES (:nombre, :apellido, :email, :password)");
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellido", $apellido);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $hashedPassword);
        return $stmt->execute();
    }

    public function comprobarExistencia($email)
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM usuarios WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }

    public function auth($email, $password)
    {
        $stmt = $this->db->prepare("SELECT id_usuario,contraseña FROM usuarios where email = :email");
        $stmt->bindParam(":email",$email);
        $stmt->execute();   
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['contraseña'])) {
            return $user['id_usuario'];
        }

        return NULL;
    }

    public function __destruct()
    {
        Connection::disconnect();
    }


}

//https://www.php.net/manual/en/book.pdo.php

?>