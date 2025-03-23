<?php
require_once __DIR__ . '/../models/usuario.php';

class LogOut
{

    public function logOut()
    {
        session_start();
        session_unset();
        session_destroy();

        echo <<<AOD
        <script>alert("Cerrando sesión :V")</script>
        AOD; 
        header("/../views/index.php");
    }

}

?>