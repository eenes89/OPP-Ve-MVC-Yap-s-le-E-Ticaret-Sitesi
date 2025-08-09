
<?php
class HomeController extends Controller {
    public function index() {
        $productModel = $this->model('Product');
        $products = $productModel->getAll();
        $this->view('home/index1', ['products' => $products]);
    }
}
?>