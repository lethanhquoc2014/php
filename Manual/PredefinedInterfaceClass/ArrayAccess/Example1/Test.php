<?php
require_once 'Product.php';
require_once 'ProductCollection.php';

$collection = new ProductCollection();
$collection->addEntity(new Product(array('productId' => 1, 'title' => 'backpack', 'price' => 29.95)));
$collection->addEntity(new Product(array('productId' => 2, 'title' => 'baseball cap', 'price' => 19.95)));
$collection->addEntity(new Product(array('productId' => 3, 'title' => 'tent', 'price' => 195.95)));
$collection->addEntity(new Product(array('productId' => 4, 'title' => 'sleeping bag', 'price' => 69.00)));

echo "We now have {$collection->count()} elements in our stack" . PHP_EOL;
foreach ($collection as $product) {
    echo $product->getTitle() . "\t" . $product->getPrice() . PHP_EOL;
}
foreach ($collection as $product) {
    echo $product['title'] . "\t" . $product['price'] . PHP_EOL;
}

// Result
/*
We now have 4 elements in our stack
backpack    29.95
baseball cap    19.95
tent    195.95
sleeping bag    69

backpack    29.95
baseball cap    19.95
tent    195.95
sleeping bag    69
 */
