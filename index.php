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
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
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
                        <!-- cards prodotti -->
                        <div class="card h-100" style="width: 23rem;">
                            <!-- immagine -->
                            <div class="img-container">
                                <img src=<?php echo $product->image[0]->url ?> class="card-img-top img-fluid" alt=<?php echo $product->image[0]->alt ?>>
                            </div>
                            <div class="card-body bg-dark ">
                                <ul class="list-group list-group-flush">
                                    <!-- titolo -->
                                    <li class="list-group-item  text-light bg-dark title-container">
                                        <h3><?php echo $product->getName() ?></h3>
                                    </li>
                                    <!-- tipologia -->
                                    <li class="list-group-item  text-light bg-dark">
                                        <h5><?php echo $product->tipology ?></h5>
                                    </li>
                                    <!-- categoria -->
                                    <li class="list-group-item  text-light bg-dark">
                                        <div class="category-container d-flex justify-content-between">
                                            <h5><?php echo $product->category ?></h5>
                                            <!-- icone categoria -->
                                            <div>
                                                <img src=<?php echo $product->getCategoryIcon($product->category)[0] ?> alt="icon">
                                                <?php if (count($product->getCategoryIcon($product->category)) > 1) : ?>
                                                    <img src=<?php echo $product->getCategoryIcon($product->category)[1] ?> alt="icon">
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- descrizione -->
                                    <li class="list-group-item  text-light bg-dark description-container">
                                        <p><?php echo $product->description ?></p>
                                    </li>
                                    <!-- prezzo -->
                                    <li class="list-group-item  text-light bg-dark">
                                        <h5>Prezzo: <?php echo $product->price ?> €</h5>
                                    </li>
                                    <li class="list-group-item  text-light bg-dark text-center">
                                        <button class="btn btn-success">Acquista</button>
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