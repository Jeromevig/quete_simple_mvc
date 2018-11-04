<?php
namespace Controller;
use Model\CategoryManager;

class CategoryController extends AbstractController
{
    /**
     *Call view to display all the Categories
     */
    public function index(){
        $categoryManager = new CategoryManager($this->pdo);
        $cats = $categoryManager->selectAllCategories();
        require __DIR__ . '/../View/category.html.twig';
    }
    /**
     * Call view to display on Category
     * @param int $id
     */
    public function show(int $id){
        $categoryManager = new CategoryManager($this->pdo);
        $cat = $categoryManager->selectOneCategory($id);
        require __DIR__ . '/../View/showCategory.html.twig';
    }
}