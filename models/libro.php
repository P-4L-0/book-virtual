<?php
require_once __DIR__ . '/../database/connection.php';

class Libro
{

    private PDO $db;
    public function __construct()
    {
        $this->db = Connection::connection();
    }

    public function create($id_usuario, $titulo, $id_autor, $id_categoria, $descripcion)
    {
        $stmt = $this->db->prepare("INSERT INTO Libros(id_usuario,titulo,id_autor, id_categoria, descripxion) VALUES(:id_usuario,:titulo,:id_autor,:id_categoria,:descripcion)");
        $stmt->bindParam(":id_usuario", $id_usuario);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":id_autor", $id_autor);
        $stmt->bindParam(":id_categoria", $id_categoria);
        $stmt->bindParam(":descripcin", $descripcion);
        return $stmt->execute();
    }

    public function getOne($id_libro, $id_usuario)
    {
        $stmt = $this->db->prepare("SELECT * FROM Libro where id_libro = :id_libro AND id_usuario = :id_usuario");
        $stmt->bindParam(":id_libro", $id_libro);
        $stmt->bindParam(":id_usuario", $id_usuario);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll($id_usuario)
    {
        $stmt = $this->db->prepare("SELECT * FROM Libros WHERE id_usuario = :id_usuario ORDER BY id_libro DESC");
        $stmt->bindParam(":id_usuario", $id_usuario);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function __destruct()
    {
        Connection::disconnect();
    }


}


?>