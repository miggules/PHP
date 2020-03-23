<?php

function generate_matrix($size) {
    for ($x = 0; $x < $size; $x++) {
        for ($y = 0; $y < $size; $y++) {
            $matrix[$x][$y] = rand(0, 1);

            if ($matrix[$x][$y]) {
                $matrix[$x][$y] = 'green';
            }
            else {
                $matrix[$x][$y] = 'red';
            }

        }
    }

    return $matrix;
}

$matrix = generate_matrix(3);

var_dump($matrix);

?>
<style>
    .wrapper {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        align-content: center;

        height: 400px;
        width: 400px;
    }
    div {
        padding: 10px;
    }
    .green {
        height: 100px;
        width: 100px;
        background-color: green;
    }
    .red {
        height: 100px;
        width: 100px;
        background-color: red;
    }
</style>
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
        <?php foreach ($matrix as $key => $colors): ?>
            <?php foreach ($colors as $color): ?>
                <div class="<?php print $color; ?>"> </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>