<?php
$datos = $_POST;
require_once __DIR__ . '/../database/connection.php';
require_once __DIR__ . '/../models/usuario.php';

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
                    $genero = ($_POST['genero'] === "Hombre" || $_POST['genero'] === "Mujer");

                    $direccion = $this->sanitize($_POST['direccion']);

                    $telefono = preg_match('/^[0-9]{8,}$/',$_POST['telefono']);

                    // $tarjeta = htmlspecialchars(trim($_POST['tarjeta'])); what is this @feliz
                    
                    $dui = preg_match('/^[0-9]{9}$/', $_POST['dui']) ? $_POST['dui'] : null;
                    $nacimiento = $_POST['nacimiento'];
                    $contra = password_hash($_POST['contra'], PASSWORD_BCRYPT);

                    // Validar formato de fecha (nacimiento)
                    $fecha_nacimiento = DateTime::createFromFormat('Y-m-d', $nacimiento);
                    if (!$fecha_nacimiento || $fecha_nacimiento->format('Y-m-d') !== $nacimiento) {
                        echo "<script>alert('Fecha de nacimiento inválida.'); window.location.href='../views/register.html';</script>";
                        exit();
                    }

                    // Verificar si el correo ya está registrado
                    $user = new Usuario();
                    if( $user->comprobarExistencia($correo)){
                        echo "<script>alert('El correo ya está registrado.'); window.location.href='../views/register.html';</script>";
                    }

                    // Insertar nuevo usuario en la base de datos
                    // Verificar si la consulta se ejecutó correctamente
                    try{
                        $user->crear();
                        //falta los datos xd
                    }catch(PDOException $e){
                        echo <<<AOD
                            <script>alert('Ocurrió un error en el registro: window.location.href='../views/register.html';
                        </script>";
                        AOD;
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
