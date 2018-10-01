<?php
    require __DIR__ . '/../vendor/autoload.php';
    use Controller\ItemController;

    $test = new ItemController();
    $test->index();