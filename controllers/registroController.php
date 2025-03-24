<?php
$datos = $_POST;
require_once __DIR__ . '/../database/connection.php';
require_once __DIR__ . '/../models/usuario.php';

class RegistroController
{
    public function registrar($datos)
    {
        $camposLlenos = true;

        foreach ($datos as $dato) {
            if (empty($dato)) {
                $camposLlenos = false;
                break;
            }
        }

        if ($camposLlenos) {
            try {
                $nombre = $this->sanitize($datos['nombre']);
                $apellido = $this->sanitize($datos['apellido']);
                $email = filter_var(trim($datos['email']), FILTER_SANITIZE_EMAIL);
                if ($datos['password'] !== $datos['p_confirm']) {
                    echo <<<AOD
                    <script>
                        alert('Las contraseñas. deben de coincidir');           window.location.href='../../views/Registro.php';
                    </script>;
                    AOD;
                    exit;
                } else {
                    $password = password_hash($datos['password'], PASSWORD_BCRYPT);
                }

                try {
                    // Verificar si el email ya está registrado
                    $user = new Usuario();
                    if ($user->comprobarExistencia($email)) {
                        echo <<<AOD
                        <script>
                            alert('El email ya está registrado.'); 
                            window.location = '../../views/Registro.php';
                        </script>;
                        AOD;
                        exit;
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                try {
                    $user->crear($nombre, $apellido, $email, $password);
                    echo <<<AOD
                    <script>
                        alert('Registro exitoso.');
                        window.location = '../../views/login.php';
                    </script>;
                    AOD;
                } catch (PDOException $e) {
                    echo <<<AOD
                    <script>
                        alert("Ocurrió un error en el registro :c"); 
                        window.location = '../../views/registro.php';
                    </script>;
                    AOD;
                    exit;
                }

            } catch (PDOException $e) {
                echo <<<AOD
                <script>
                    alert("Error: {$e->getMessage()}");
                    window.location.href='../views/register.html';</script>";
                AOD;
            }
        } else {
            echo <<<AOD
            <script>
                alert('Por favor, completa todos los campos.'); 
                window.location = '../../views/registro.php';
            </script>";
            AOD;
            exit;
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
