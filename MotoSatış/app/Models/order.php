<?php
class Order {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getAll($userId) {
        $stmt = $this->db->prepare('SELECT * FROM orders WHERE user_id = ?');
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getItems($orderId) {
        $stmt = $this->db->prepare('SELECT oi.*, p.name, p.image FROM order_items oi JOIN products p ON oi.product_id = p.id WHERE oi.order_id = ?');
        $stmt->execute([$orderId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
