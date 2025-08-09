<?php
class ProductController extends Controller {
    public function list() {
        $productModel = $this->model('Product');
        $products = $productModel->getAll();
        $this->view('product/list', ['products' => $products]);
    }
    public function detail($id) {
        $productModel = $this->model('Product');
        $product = $productModel->getById($id);
        $this->view('product/detail', ['product' => $product]);
    }
} 
?>