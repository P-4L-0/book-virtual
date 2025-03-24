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
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellido", $apellido);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $$password);
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

    public function getName($id){
        $stmt = $this->db->prepare("SELECT nombre FROM usuarios WHERE id_usuario = :id_usuario");
        $stmt->bindParam(":id_usuario", $id);   
        $stmt->execute();
        return $id = $stmt->fetch();
    }

    public function getCountOfALL($id) {
        $stmt = $this->db->prepare(
            "SELECT COUNT(L.id_usuario) as Libros,
                    COUNT(A.id_usuario) as Autores,
                    COUNT(C.id_usuario) as Categorias,
                    COUNT(D.id_usuario) FROM Libros L 
                    JOIN Autores A on L.id_usuario = A.id_usuario
                    JOIN Categorias C on A.id_usuario = C.id_usuario
                    JOIN LibrosDeseados D on C.id_usuario = D.id_usuario
                    WHERE L.id_usuario = :id_usuario");
        $stmt->bindParam(":id_usuario", $id);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado === false) {
            return [
                'Libros' => 0,
                'Autores' => 0,
                'Categorias' => 0,
                'LibrosDeseados' => 0
            ];
        }

        return $resultado;
    }

    public function __destruct()
    {
        Connection::disconnect();
    }


}

//https://www.php.net/manual/en/book.pdo.php

?>