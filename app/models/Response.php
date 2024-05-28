<?php

class Response {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getResponsesByPostId($post_id) {
        $stmt = $this->db->prepare("SELECT * FROM responses WHERE post_id = :post_id ORDER BY created_at ASC");
        $stmt->bindParam(':post_id', $post_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createResponse($post_id, $user_id, $content) {
        $stmt = $this->db->prepare("INSERT INTO responses (post_id, user_id, content) VALUES (:post_id, :user_id, :content)");
        $stmt->bindParam(':post_id', $post_id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':content', $content);
        return $stmt->execute();
    }
}
?>
