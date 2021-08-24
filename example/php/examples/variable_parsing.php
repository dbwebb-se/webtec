<?php

declare(strict_types=1);

$user = "mos";
$power = 3;
$msg = "The user $user has power = $power.\n";
echo $msg;

// No variable parsing, nor \n
$msg = 'The user $mos has power = $power.\n';
echo $msg;
