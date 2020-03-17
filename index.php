<?php

$a = rand(10, 50);
$b = rand(20, 60);
$c = rand(1, 10);

function sum($x, $y)
{
    $sum = $x + $y;
    return "$x and $y equals to $sum";
}

function prime($x)
{
    for ($i = 2; $i <= ($x/2); $i++) {
        if ($x % $i == 0) {
            return "$x is not a prime";
        }
    }
    return "$x is a prime";
}

$h1 = sum($a, $b);
$h2 = prime($c);

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
    <div class="wrapper">
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </div>
</main>
</body>
</html>