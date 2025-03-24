<?php
require_once __DIR__ . '/../controllers/registroController.php';
require_once __DIR__ . '/../controllers/loginController.php';
require_once __DIR__ . '/../controllers/logOutController.php';
require_once __DIR__ . '/../controllers/categoraiController.php';



//instancia de controladores
$registro = new RegistroController();
$login = new LoginController();
$logOut = new LogOutController();
$category = new CategoryController();

//obtención del método http
$method = $_SERVER["REQUEST_METHOD"];
$uri = explode("/", trim($_SERVER["REQUEST_URI"], "/"));
$route = end($uri);

//rutas de la api
$routes = [
    'POST' => [
        'register' => function () use ($registro) {
            $datos = $_POST; 
            $registro->registrar($datos);
        },
        'login'=> function () use ($login) {
            $datos = $_POST;
            $login->authenticate($datos);
        },
        'logout' => function () use ($logOut){
            $logOut->logOut();
        },
        'category' => function () use ($category){
            $datos = $_POST;
            $category->add($datos);
        }
    ]
];

if (isset($routes[$method][$route])) {
    $routes[$method][$route]();
} else {
    http_response_code(404);
    echo json_encode(["error" => "Not Found", "status" => 404]);
}

?>