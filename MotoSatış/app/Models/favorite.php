<?php
class Favorite {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getAll($userId) {
        $stmt = $this->db->prepare('SELECT f.*, p.name, p.price, p.image FROM favorites f JOIN products p ON f.product_id = p.id WHERE f.user_id = ?');
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
