<?php
require_once __DIR__ . '/../database/connection.php';

class Autor{

    private PDO $db;
    public function __construct(){
        $this->db = Connection::connection();
    }

    public function create($id_usuario, $nombre, $nacionalidad, $fecha_nacimiento){
        $stmt = $this->db->prepare("INSERT INTO Autores(id_usuario,nombre,nacionalidad,fecha_nacimiento) VALUES(:id_usuario,:nombre,:nacionalidad,:fecha_nacimiento)");
        $stmt->bindParam(":id_usuario",$id_usuario);
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":nacionalidad",$nacionalidad);
        $stmt->bindParam(":fecha_nacimiento",$fecha_nacimiento);
        return $stmt->execute();
    }

    public function getOne($id_autor, $id_usuario){
        $stmt = $this->db->prepare("SELECT * FROM Autores WHERE id_autor = :id_autor AND id_usuario = :id_usuario");
        $stmt->bindParam(":id_autor",$id_autor);
        $stmt->bindParam(":id_usuario",$id_usuario);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll($id_usuario){
        $stmt = $this->db->prepare("SELECT * FROM Autores WHERE id_usuario = :id_usuario");
        $stmt->bindParam(":id_usuario",$id_usuario);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function edit(){

    }

    public function delete(){
        
    }

    public function __destruct(){
        Connection::disconnect();
    }


}


?>