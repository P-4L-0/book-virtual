<?php

class CategoryController
{

    public function add($datos)
    {
        $camposLlenos = true;

        foreach ($datos as $dato) {
            if (empty($dato)) {
                $camposLlenos = false;
                break;
            }
        }

        if ($camposLlenos) {
            
        } else {
            echo <<<AOD
            <script>
                alert("Todos los campos son requeridos"); 
                window.location = "../views/adcategoria.php";
            </script>
            AOD;
        }
    }

}




?>