<?php
require_once __DIR__ . '/../database/connection.php';

class Autor{

    private PDO $db;
    public function __construct(){
        $this->db = Connection::connection();
    }

    public function create(){

    }

    public function getOne(){

    }

    public function getAll(){

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