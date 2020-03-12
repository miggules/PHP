<?php

$products = [
    [
        'name' => 'Stumbro Degtinela',
        'price' => 6.49,
        'image' => '/assets/stumbras.jpg',
    ],
    [
        'name' => 'Balzamas',
        'price' => 9.89,
        'image' => '/assets/balzamas.jpg',
    ],
    [
        'name' => 'Absolut',
        'price' => 14.99,
        'image' => '/assets/absolut.png',
    ],
    [
        'name' => 'Baileys',
        'price' => 8.69,
        'image' => '/assets/baileys.jpg',
    ]
];

$h1 = 'Drink catalog';

$product = [];

foreach ($products as $product_key => $product) {

    $name_key = $products[$product_key]['name'];
    $price_key = $products[$product_key]['price'];
    $image_key = $products[$product_key]['image'];

    $product = [
        'name' => $name_key,
        'price' => $price_key,
        'image' => $image_key
    ];
}

?>
<html lang="en">
<head>
    <title>
        php
    </title>
    <link href="/assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <h1><?php print $h1; ?></h1>
    <div class="wrapper">
        <div class="products">
            <?php foreach ($products as $product): ?>
            <div class="product">
                <img src="<?php print $product['image']; ?>">
                <div class="info">
                    <h2>
                        <?php print $product['name']; ?>
                    </h2>
                    <h3>
                        <?php print $product['price']; ?>
                    </h3>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</main>
</body>
</html>
