<?php

use App\Entity\Product;
use App\Repository\ProductRepository;

require '../vendor/autoload.php';

/* $connection = new PDO("mysql:host=localhost;dbname=php_pdo", "root", "");

$query = $connection->prepare("SELECT * FROM product");

$query->execute();

foreach ($query->fetchAll() as $line) {
    echo $line['label'];
} */

$instance = new ProductRepository();

/* $products = $instance->findAll();

$instance->persist(new Product(0, 'Christophe', 10, 'Est un gros con'));

$instance->delete(32); */

$instance->findById(3);


var_dump($instance->findById(3));




