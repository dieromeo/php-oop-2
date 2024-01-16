<?php
require __DIR__ . "/controllers/ProductController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Animals shop</title>
</head>

<body>
    <header>
        <h1 class="text-center py-5">Prodotti</h1>
    </header>
    <main>
        <div class="container py-4">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($products as $product) : ?>
                    <div class="col">
                        <div class="card h-100" style="width: 23rem;">
                            <img src=<?php echo $product->image[0]->url ?> class="card-img-top" alt=<?php echo $product->image[0]->alt ?>>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h3><?php echo $product->name ?></h3>
                                    </li>
                                    <li class="list-group-item">
                                        <h5><?php echo $product->tipology ?></h5>
                                    </li>
                                    <li class="list-group-item">
                                        <h5><?php echo $product->category ?></h5>
                                    </li>
                                    <li class="list-group-item">
                                        <p><?php echo $product->description ?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <h5>Prezzo: <?php echo $product->price ?> €</h5>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>

</html>