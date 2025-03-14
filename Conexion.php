<?php
class Conexion
{
    private $host = 'localhost';
    private $user = 'root'; 
    private $pass = ''; 
    private $db = 'biblioteca';
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db};charset=utf8mb4", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa a la base de datos.";
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
?>