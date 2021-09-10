<?php

declare(strict_types=1);

$file1 = 'sherlock.txt';

if (file_exists($file1)) {
    print("Filen $file1 finns.\n\n");
};
echo "sherlock.txt: " . file_get_contents($file1, true) . "\n\n";
