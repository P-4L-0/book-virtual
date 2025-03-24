<?php
require_once __DIR__ . '/../database/connection.php';

class Category
{

    private PDO $db;
    public function __construct()
    {
        $this->db = Connection::connection();
    }

    public function create($id_usuario, $nombre)
    {
        $stmt = $this->db->prepare("INSERT INTO categorias(id_usuario,nombre) VALUES(:id_usuario, :nombre)");
        $stmt->bindParam(":id_usuario", $id_usuario);
        $stmt->bindParam(":nombre", $nombre);
        return $stmt->execute();
    }

    public function getOne($id_categoria, $id_usuario)
    {
        $stmt = $this->db->prepare("SELECT * FROM Categorias WHERE id_categoria = :id_categoria AND id_usuario = :id_usuario");
        $stmt->bindParam(":id_categoria", $id_categoria);
        $stmt->bindParam(":id_usaurio", $id_usuario);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll($id_usuario)
    {
        $stmt = $this->db->prepare("SELECT * FROM Categorias WHERE  id_usuario = :id_usuario");
        $stmt->bindParam(":id_usuario", $id_usuario);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function edit(){

    }

    public function delete(){
        
    }

    public function __destruct()
    {
        Connection::disconnect();
    }


}


?>