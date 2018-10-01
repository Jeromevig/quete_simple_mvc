<?php
    namespace Controller;
    use Model\ItemManager;


    class ItemController {
        public function index(){
           $items = new ItemManager();
           $items = $items-> selectAllItems();
            require __DIR__ . '/../View/item.php';
        }
    }




?>