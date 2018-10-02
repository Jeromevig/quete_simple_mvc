<?php

namespace Model;
require __DIR__ . '/../../app/db.php';
class CategoryManager
{

    public function selectAllCategories() : array {
        $pdo = new \PDO(DSN, USER, PASS);
        $query="SELECT * FROM Category";
        $statement = $pdo->query($query);
        return $statement->fetchAll();
    }

    public function selectOneCategory(int $id) : array {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM Category WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch();
    }
}