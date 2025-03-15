<?php
class Connection
{
    private const HOST = 'localhost';
    private const USER = 'root';
    private const PASSWD = '';
    private const DB = 'biblioteca';
    private static ?PDO $connection = null;
    private static int $instancias = 0;

    public static function connection()
    {
        try {
            self::$connection = new PDO("mysql:host=" .self::HOST. ";dbname=".self::DB.";", self::USER, self::PASSWD);

            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            self::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            // echo "Conexión exitosa a la base de datos.";
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }

        return self::$connection;
    }

    public static function disconnect(): void
    {
        self::$instancias--;
        if (self::$instancias <= 0) {
            self::$connection = null;
        }
    }
}
?>