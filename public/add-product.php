<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Oui</title>
</head>

<body>
    <?php
    use App\Entity\Product;
    use App\Repository\ProductRepository;


    require '../vendor/autoload.php';

    $instance = new ProductRepository();

    $succes = "Bravo le veau";

    if (isset($_POST['label'])) {
        $label = $_POST['label'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $prod = new Product(0, $label, $price, $description);
        $instance->persist($prod);
}

    ?>
    <div class="container">
        <h1>Add products</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input name="label" type="text" class="form-control" id="label" aria-describedby="labelHelp" require>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" type="text" class="form-control" id="description" require></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input name="price" type="text" class="form-control" id="price" aria-describedby="priceHelp" require>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
    </div>
    </div>
</body>

</html>