<?php
require_once __DIR__ . '/../models/usuario.php';
/**
 * @author P-4l-0
 * Summary of LoginController
 * controlador para el login
 */
class LoginController
{
    public function authenticate($datos)
    {
        $camposLlenos = true;
        foreach ($datos as $dato) {
            if (empty($dato)) {
                $camposLlenos = false;
                break;
            }
        }
        if ($camposLlenos) {

            $email = filter_var(trim($datos['email']), FILTER_SANITIZE_EMAIL);
            $password = $datos['password'];
            $user = new Usuario();


            try {
                $userId = $user->auth($email, $password);

                if ($userId) {
                    session_start();
                    session_regenerate_id(true);
                    $_SESSION['id_usuario'] = $userId;
                    echo <<<AOD
                    <script>
                        alert("Inicio exitoso");
                        window.location = "../../views/inicio.php";
                    </script>
                    AOD;
                } else {
                    echo <<<AOD
                    <script>
                        alert("Credenciales Incorrectas");
                        window.location = "../../views/login.php";
                    </script>
                    AOD;
                    exit; 
                }
            } catch (PDOException $e) {
                echo <<<AOD
                <script>alert("{$e->getMessage()}");</script>
                AOD;
            }
        } else {
            echo <<<AOD
            <script>
                alert("Todos los campos son requeridos");
            </script>
            AOD;
            exit;
        }
    }
}

?>