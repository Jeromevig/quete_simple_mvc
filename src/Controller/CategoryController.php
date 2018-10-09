<?php
namespace Controller;
use Model\CategoryManager;
class CategoryController
{
    /**
     *Call view to display all the Categories
     */
    public function index(){
        $categoryManager = new CategoryManager();
        $cats = $categoryManager->selectAllCategories();
        require __DIR__ . '/../View/category.php';
    }
    /**
     * Call view to display on Category
     * @param int $id
     */
    public function show(int $id){
        $categoryManager = new CategoryManager();
        $cat = $categoryManager->selectOneCategory($id);
        require __DIR__ . '/../View/showCategory.php';
    }
}