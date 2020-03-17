<?php

$police_report = [
    [
        'subject' => 'Domantas',
        'reason' => 'Public urination',
        'amount' => 50
    ],
    [
        'subject' => 'Migle',
        'reason' => 'Drunk in public',
        'amount' => 0
    ],
    [
        'subject' => 'Juste',
        'reason' => 'Skinny dipping',
        'amount' => 0
    ],
    [
        'subject' => 'Karen',
        'reason' => 'Constant fucking complaining',
        'amount' => 200
    ]
];

foreach ($police_report as $index => $report) {
    if ($report['amount'] === 0) {
        $report['warning'] = true;
    } else {
        $report['warning'] = false;
    }

    $report['text'] = $report['subject'] . '(' . $report['reason'] . ')';
    if ($report['warning']) {
        $report['text'] .= 'ispejimas';
    } else {
        $report['text'] .= $report['amount'] . 'eur';
    }
    $police_report[$index] = $report;

}

var_dump($police_report);

$h1 = 'Palicijos israsas';

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
        <ul>
            <?php foreach ($police_report as $index => $report): ?>
            <li>
                <?php print $report['text']; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>
</body>
</html>