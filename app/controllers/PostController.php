<?php

class PostController {
    private $postModel;

    public function __construct($db) {
        $this->postModel = new Post($db);
    }

    public function index() {
        $posts = $this->postModel->getAllPosts();
        require __DIR__ . '/../views/posts/index.php'; // Ruta absoluta
    }

    public function show($id) {
        $post = $this->postModel->getPostById($id);
        $responses = (new Response($this->postModel->db))->getResponsesByPostId($id);
        require __DIR__ . '/../views/posts/show.php'; // Ruta absoluta
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $user_id = 1; //$_SESSION['user_id']; // Assume user_id is stored in session
            $this->postModel->createPost($user_id, $title, $content);
            header('Location: /tallerFoto/public'); // Redirigir a la página principal
        } else {
            require __DIR__ . '../views/posts/create.php'; // Ruta absoluta
        }
    }
}
?>