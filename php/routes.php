<?php
require_once __DIR__ . '/register.php';



//instancia de controladores
$registro = new Registro();


//obtención del método http
$method = $_SERVER["REQUEST_METHOD"];
$uri = explode("/", trim($_SERVER["REQUEST_URI"], "/"));
$route = end($uri);

//rutas de la api
$routes = [
    'POST' => [
        'register' => function () use ($registro): void {
            $datos = $_POST; 
            $registro->registrar($datos);
        },
    ]
];

if (isset($routes[$method][$route])) {
    $routes[$method][$route]();
} else {
    http_response_code(404);
    echo json_encode(["error" => "Not Found", "status" => 404]);
}

?>