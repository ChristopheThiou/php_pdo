<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Non</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            use App\Entity\Product;
            use App\Repository\ProductRepository;


            require '../vendor/autoload.php';




            $instance = new ProductRepository();

            $products = $instance->findAll();

            foreach ($products as $line) {


                echo '<div class="card" style="width: 18rem;">' .

                    '<div class="card-body">' .
                    '<h3 class="card-title">' . $line->getLabel() . '</h3>' .
                    '<p class="card-text">' . $line->getDescription() . '</p>' .
                    '<p class="card-text">' . $line->getPrice() . " €" . '</p>' .
                    '<a href="single-product.php?id='. $line->getId().'" class="card-link">' . 'Details' .
                    '</a>
                    </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</body>

</html>

<?php





/* $connection = new PDO("mysql:host=localhost;dbname=php_pdo", "root", "");

$query = $connection->prepare("SELECT * FROM product");

$query->execute();

foreach ($query->fetchAll() as $line) {
   echo $line['label'];
}

$instance = new ProductRepository();

$products = $instance->findAll();

$instance->persist(new Product(0, 'Christophe', 10, 'Est un gros con'));

$instance->delete(32);

$instance->findById(3);



var_dump($instance->findAll());

var_dump($instance->findById(3));

$instance->update(new Product(29, 'Momo', 10.5, 'Méchant')); */