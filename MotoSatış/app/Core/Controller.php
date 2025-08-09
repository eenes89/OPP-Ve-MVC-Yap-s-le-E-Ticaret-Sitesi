
<?php
class Controller {
    protected $db;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=motosatis;charset=utf8';
        $user = 'root';
        $pass = 'enes1234';
        try {
            $this->db = new PDO($dsn, $user, $pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Veritabanı bağlantı hatası: ' . $e->getMessage());
        }
    }

    public function model($model) {
        require_once '../app/Models/' . $model . '.php';
        return new $model($this->db);
    }

    public function view($view, $data = []) {
        require_once '../app/Views/' . $view . '.php';
    }
}
?>