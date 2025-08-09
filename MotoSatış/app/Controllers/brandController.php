
<?php
class BrandController extends Controller {
    public function index() {
        $brandModel = $this->model('Brand');
        $brands = $brandModel->getAll();
        $this->view('brand/index4', ['brands' => $brands]);
    }
}
?>