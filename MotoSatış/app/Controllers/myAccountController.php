
<?php
class MyAccountController extends Controller {
    public function index() {
        $userId = 1; // Demo için sabit, oturumdan alınabilir
        $favoriteModel = $this->model('Favorite');
        $orderModel = $this->model('Order');
        $addressModel = $this->model('Address');
        $userModel = $this->model('User');
        $favorites = $favoriteModel->getAll($userId);
        $orders = $orderModel->getAll($userId);
        $addresses = $addressModel->getAll($userId);
        $user = $userModel->findById($userId);
        $this->view('myAccount/index2', [
            'favorites' => $favorites,
            'orders' => $orders,
            'addresses' => $addresses,
            'user' => $user
        ]);
    }
}
?>