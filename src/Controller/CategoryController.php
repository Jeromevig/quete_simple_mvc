<?php

namespace Controller;
use Model\CategoryManager;
class CategoryController
{
    public function index(){
        $cats = new CategoryManager();
        $cats = $cats->selectAllCategories();
        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id){
        $cat = new CategoryManager();
        $cat = $cat->selectOneCategory($id);
        require __DIR__ . '/../View/showCategory.php';
    }
}