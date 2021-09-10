<?php

declare(strict_types=1);

$variables = "1, 2, 3";

$message = <<<EOD
This is a larger message of text,
    keeping its format,
    spanning several lines and including
'$variables' that are parsed for their values.

EOD;

echo $message;
