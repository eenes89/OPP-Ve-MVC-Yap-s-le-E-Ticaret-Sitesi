<?php
class UserController extends Controller {
    public function index() {
        $userId = 1; // Demo için sabit, oturumdan alınabilir
        $userModel = $this->model('User');
        $user = $userModel->findById($userId);
        $this->view('myAccount/index2', ['user' => $user]);
    }
    public function login() {
        $this->view('myAccount/login');
    }
    public function logout() {
        // session_destroy();
        header('Location: /MotoSatış/index.php?url=home/index');
        exit;
    }
    public function updateInfo() {
        // Bilgi güncelleme
        // ...
    }
    public function changePassword() {
        // Şifre güncelleme
        // ...
    }
}
