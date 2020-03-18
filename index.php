<?php

$a = rand(1000, 10000);
$b = 750.49;

function prime($x)
{
    for ($i = 2; $i <= ($x/2); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}

function sum($x, $y) {
    return $sum = $x - $y;
}

function show_name($full_name) {
    return 'Hello, this is ' . $full_name;
}

function srtotime($now) {
    return date("F j, Y, g:i a") . "\n";
}

function truth($item) {
    return "choke on $item";
}

function n($x) {
    return $x + 1;
}


function x($z) {
    return n($z) + 1;
}

$x = 1;

print x($x);

$hello = show_name('David Rogers') . ' and the date is ' . srtotime("now");
$money = "So I got paid $a today, but my sugar baby wants $b for her new set of shoes";
$lemon_stealing_whore = "If I don't pay her, I'll have no one who loves me - so now I have " . sum($a, $b);
$sad_life = 'Now, I know money cannot buy happiness, but.. it can buy a damn good actress. Even though, deep down, I know she probably wants me to go ' . truth('tidepods') . ' like she often says I make her ' . truth('dick');



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
        <p><?php print $hello; ?></p>
        <p><?php print $money; ?></p>
        <p><?php print $lemon_stealing_whore; ?></p>
        <p><?php print $sad_life; ?></p>
    </div>
</main>
</body>
</html>