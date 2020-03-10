<?php

$nav = [
    [
        'url' => 'index.php',
        'label' => 'Home'
    ],
    [
        'url' => 'about.php',
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
]

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
