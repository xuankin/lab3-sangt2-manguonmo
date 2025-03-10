<?php
require_once 'app/config/database.php';
require_once 'app/models/CategoryModel.php';

class CategoryController
{
    private $categoryModel;
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->categoryModel = new CategoryModel($this->db);
    }

    public function index()
    {
        $categories = $this->categoryModel->getCategories();
        include 'app/views/category/list.php';
    }

    public function show($id)
    {
        $category = $this->categoryModel->getCategoryById($id);
        if ($category) {
            include 'app/views/category/show.php';
        } else {
            echo "Không thấy danh mục.";
        }
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $result = $this->categoryModel->addCategory($name, $description);

            header('Content-Type: application/json');
            if (is_array($result)) {
                echo json_encode(['success' => false, 'message' => $result['name']]);
            } else {
                echo json_encode(['success' => true]);
            }
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $result = $this->categoryModel->updateCategory($id, $name, $description);

            header('Content-Type: application/json');
            if (is_array($result)) {
                echo json_encode(['success' => false, 'message' => $result['name']]);
            } else {
                echo json_encode(['success' => true]);
            }
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $result = $this->categoryModel->deleteCategory($id);
            header('Content-Type: application/json');
            echo json_encode([
                'success' => $result,
                'message' => $result ? '' : 'Không thể xóa vì có sản phẩm liên quan'
            ]);
        }
    }
}
?>