<?php
class Address {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getAll($userId) {
        $stmt = $this->db->prepare('SELECT * FROM addresses WHERE user_id = ?');
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
