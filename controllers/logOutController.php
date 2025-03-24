<?php
require_once __DIR__ . '/../models/usuario.php';

class LogOutController
{

    public function logOut()
    {
        session_start();
        session_unset();
        session_destroy();

        echo <<<AOD
        <script>
            alert("Cerrando sesión :V")
            window.location = "../../views/index.php";
        </script>
        AOD; 
    }

}

?>