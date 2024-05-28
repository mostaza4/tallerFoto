<?php

session_start();

// Cargar la configuración y las dependencias necesarias
require '../config/init.php';
require '../app/models/Post.php';
require '../app/models/Response.php';
require '../app/controllers/PostController.php';
require '../app/controllers/ResponseController.php';


/*
Valores posibles de redireccionamiento de acciones de foro alias: i
 Estados i
 0 init
 1 create
*/
$i=0;
if(isset($_POST['i'])){
    $i = isset($_POST['i']);
}
switch ($i) 
{
    case 0:
        // Ruta raíz, muestra todos los posts
        $controller = new PostController($db->Connect());
        $controller->index();
        break;
    case 1:
        // Ruta para crear un nuevo post
        $controller = new PostController($db->Connect());
        $controller->create();
        break;
    case 2:
        // Ruta para mostrar post
        $controller = new PostController($db->Connect());
        $controller->show($_POST['id']);
        break;
        
}
/*// Rutas básicas
if (!isset($uri[$baseIndex]) || $uri[$baseIndex] == '') {
    // Ruta raíz, muestra todos los posts
    $controller = new PostController($db);
    $controller->index();
} elseif ($uri[$baseIndex] == 'post' && isset($uri[$baseIndex + 1]) && $uri[$baseIndex + 1] == 'create') {
    // Ruta para crear un nuevo post
    $controller = new PostController($db);
    $controller->create();
} elseif ($uri[$baseIndex] == 'post' && isset($uri[$baseIndex + 1]) && $uri[$baseIndex + 1] == 'show' && isset($uri[$baseIndex + 2])) {
    // Ruta para mostrar un post específico
    $controller = new PostController($db);
    $controller->show($uri[$baseIndex + 2]);
} elseif ($uri[$baseIndex] == 'response' && isset($uri[$baseIndex + 1]) && $uri[$baseIndex + 1] == 'create' && isset($uri[$baseIndex + 2])) {
    // Ruta para crear una nueva respuesta
    $controller = new ResponseController($db);
    $controller->create($uri[$baseIndex + 2]);
} else {
    // Ruta no encontrada (404)
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
    exit();
}
*/
?>