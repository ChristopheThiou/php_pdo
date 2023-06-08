<?php

namespace App\Repository;

use App\Entity\Product;
use PDO;

class ProductRepository
{
    public function findAll(): array
    {
        $list = [];
        $connection = new PDO("mysql:host=localhost;dbname=php_pdo", "root", "");
        $query = $connection->prepare("SELECT * FROM product");
        $query->execute();
        foreach ($query->fetchAll() as $line) {
            $list[] = new Product($line['id'], $line['label'], $line['price'], $line['description']);
        }
        return $list;
    }
    public function persist(Product $product)
    {
        $connection = new PDO("mysql:host=localhost;dbname=php_pdo", "root", "");
        $query = $connection->prepare("INSERT INTO product (label, price, description) VALUES (:label, :price, :description)");
        $query->bindValue(':label', $product->getLabel());
        $query->bindValue(':price', $product->getPrice());
        $query->bindValue(':description', $product->getDescription());
        $query->execute();
    }
    public function delete(int $id)
    {
        $connection = new PDO("mysql:host=localhost;dbname=php_pdo", "root", "");
        $query = $connection->prepare("DELETE FROM product WHERE id = :id ");
        $query->bindValue(':id', $id);
        $query->execute();
    }
    public function findById(int $id)
    {
        $connection = new PDO("mysql:host=localhost;dbname=php_pdo", "root", "");
        $query = $connection->prepare("SELECT * FROM product WHERE id = :id ");
        $query->bindValue(':id', $id);
        $query->execute();
        $find = $query->fetch();
        if ($find == false) {
            return;
        }
        return new Product($find['id'], $find['label'], $find['price'], $find['description']);;
    }
}