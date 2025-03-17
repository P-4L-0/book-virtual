<?php
$datos = $_POST;
require_once __DIR__ . '/../database/connection.php';

class RegistroController
{

    private PDO $db;

    public function __construct()
    {
        $this->db = Connection::Connection();
    }



    public function registrar($datos)
    {
        if (isset($_POST['register'])) {
            $camposLlenos = true;

            foreach ($datos as $dato) {
                if (empty($dato)) {
                    $camposLlenos = false;
                }
                break;
            }

            if ($camposLlenos) {
                try {
                    $nombre = $this->sanitize($_POST['nombre']);
                    $apellido = $this->sanitize($_POST['apellido']);
                    $correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL);
                    $genero = ($_POST['genero'] === "Hombre" || $_POST['genero'] === "Mujer") ? $_POST['genero'] : null;
                    $direccion = $this->sanitize($_POST['direccion']);
                    $telefono = preg_match('/^[0-9]{8,}$/', $_POST['telefono']) ? $_POST['telefono'] : null;
                    $tarjeta = htmlspecialchars(trim($_POST['tarjeta']));
                    $dui = preg_match('/^[0-9]{9}$/', $_POST['dui']) ? $_POST['dui'] : null;
                    $nacimiento = $_POST['nacimiento'];
                    $contra = password_hash($_POST['contra'], PASSWORD_BCRYPT);

                    // Validar género, teléfono y DUI
                    if (!$genero || !$telefono || !$dui) {
                        echo "<script>alert('Datos inválidos, revisa el género, teléfono o DUI.'); window.location.href='../views/register.html';</script>";
                        exit();
                    }

                    // Validar formato de fecha (nacimiento)
                    $fecha_nacimiento = DateTime::createFromFormat('Y-m-d', $nacimiento);
                    if (!$fecha_nacimiento || $fecha_nacimiento->format('Y-m-d') !== $nacimiento) {
                        echo "<script>alert('Fecha de nacimiento inválida.'); window.location.href='../views/register.html';</script>";
                        exit();
                    }

                    // Verificar si el correo ya está registrado
                    $stmt = $this->db->prepare("SELECT id_usuario FROM usuarios WHERE correo = ?");
                    $stmt->execute([$correo]);

                    if ($stmt->fetchAll()) {
                        echo "<script>alert('El correo ya está registrado.'); window.location.href='../views/register.html';</script>";
                        exit();
                    }

                    // Insertar nuevo usuario en la base de datos
                    $sql = "INSERT INTO usuarios (nombre, apellido, correo, password, genero, direccion, telefono, tarjeta, dui, nacimiento) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute([$nombre, $apellido, $correo, $contra, $genero, $direccion, $telefono, $tarjeta, $dui, $nacimiento]);

                    // Verificar si la consulta se ejecutó correctamente
                    if ($result) {
                        echo "<script>alert('Te registraste correctamente'); window.location.href='../views/login.html';</script>";
                    } else {
                        $errorInfo = $stmt->errorInfo(); // Obtener detalles del error
                        echo "<script>alert('Ocurrió un error en el registro: " . $errorInfo[2] . "'); window.location.href='../views/register.html';</script>";
                    }
                } catch (PDOException $e) {
                    echo "<script>alert('Error en la base de datos: " . $e->getMessage() . "'); window.location.href='../views/register.html';</script>";
                }
            } else {
                echo "<script>alert('Por favor, completa todos los campos.'); window.location.href='../views/register.html';</script>";
            }
        }

    }

    private function sanitize($input)
    {

        //elimina tags html
        $input = strip_tags($input);

        //elimina aun mas html
        $input = htmlspecialchars($input);

        //remplaza todo indeseado
        $input = preg_replace('/[^A-Za-z0-9áéíóúÁÉÍÓÚñÑ\s.,-]/u', '', $input);

        //quita espacios
        $input = trim($input);

        return $input;
    }


}
