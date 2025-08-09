
<?php
class CategoryController extends Controller {
    public function list() {
        $categoryModel = $this->model('Category');
        $categories = $categoryModel->getAll();
        $this->view('category/list', ['categories' => $categories]);
    }
}
