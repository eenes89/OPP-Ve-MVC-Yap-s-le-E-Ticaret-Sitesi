<?php 
class cartController extends Controller {
    public function index() {
        $userId = 1; // Demo için sabit, oturumdan alınabilir
        $cartModel = $this->model('Cart');
        $items = $cartModel->getItems($userId);
        $this->view('cart/index3', ['items' => $items]);
    }
    public function orders() {
       
        $this->view('cart/orders');
    }
    public function cargoTracking() {
        $this->view('cart/cargoTracking');
    }
    public function login() {
        $this->view('cart/login');       
    }

    public function complete() {
        $this->view('cart/complete');
    }
}
?>