<?php

require_once __DIR__ . "/../database/db.php";
require_once __DIR__ . "/../models/specificProduct.php";
require_once __DIR__ . "/../models/image.php";

$products = [];

foreach ($db_products as $product) {
    $images = [];
    foreach ($product['image'] as $image) {
        array_push($images, new Image($image['url'], $image['alt']));
    }
    array_push($products, new SpecificProduct($product['name'], $product['price'], $product['category'], $product['description'], $product['tipology'], $images));
}
