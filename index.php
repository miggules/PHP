<?php

$nav = [
    [
        'url' => '/index.php',
        'label' => 'Home',
        'links' => [
            'url' => '/',
            'label' => 'help'
        ],
        [
            'url' => '/',
            'label' => 'me'
        ],
        [
            'url' => '/',
            'label' => 'please'
        ],
        [
            'url' => '/',
            'label' => 'god'
        ]
    ],
    [
        'url' => '/',
        'label' => 'About'
    ],
    [
        'url' => '/',
        'label' => 'Contact'
    ],
    [
        'url' => '/',
        'label' => 'Portfolio'
    ]
];

// var_dump($_SERVER);

?>
<html lang="en">
<head>
    <title>
        php
    </title>
    <link href="/assets/css/nav.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
    <body>
        <?php include 'templates/nav.php';?>
    </body>
</html>
