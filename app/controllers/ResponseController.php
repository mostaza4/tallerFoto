<?php

class ResponseController {
    private $responseModel;

    public function __construct($db) {
        $this->responseModel = new Response($db);
    }

    public function create($post_id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $content = $_POST['content'];
            $user_id = $_SESSION['user_id']; // Assume user_id is stored in session
            $this->responseModel->createResponse($post_id, $user_id, $content);
            header('Location: /tallerFoto/public/post/show/' . $post_id); // Redirigir a la página del post
        } else {
            // Normalmente, no necesitamos una vista para crear una respuesta, ya que se maneja en la vista del post
            header('Location: /tallerFoto/public/post/show/' . $post_id); // Redirigir a la página del post
        }
    }
}
?>