<?php

declare(strict_types=1);

$game = [];

$game[4] = "X"; // row=1, col=1
$game[8] = "O"; // row=2, col=2
$game[6] = "X"; // row=2, col=0
$game[2] = "O"; // row=0, col=2

print_r($game);
var_dump($game);

$game = [[], [], []];

$game[1][1] = "X"; // row=1, col=1
$game[2][2] = "O"; // row=2, col=2
$game[2][0] = "X"; // row=2, col=0
$game[0][2] = "O"; // row=0, col=2

print_r($game);
var_dump($game);
