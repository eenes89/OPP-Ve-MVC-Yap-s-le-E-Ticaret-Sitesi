
<?php
class Cart {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getItems($userId) {
        $stmt = $this->db->prepare('SELECT c.*, p.name, p.price, p.image FROM cart c JOIN products p ON c.product_id = p.id WHERE c.user_id = ?');
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Sepete ekleme, silme, temizleme fonksiyonları eklenebilir
}
?>