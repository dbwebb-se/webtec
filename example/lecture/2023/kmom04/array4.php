<?php
include('../config/config.php');

$mikael = [
    "firstName" => "Mikael",
    "lastName" => "Roos",
    "age" => 42,
    "occupation" => "Teacher",
];


?><h1>Lek med arrayer</h1>

<p>Min lärare heter <?= $mikael["firstName"] ?> <?= $mikael ["lastName"] ?> och är <?= $mikael["age"] ?> år ung.</p> 

<pre>
<?= print_r($mikael, true) ?>
</pre>

<pre>
<?= var_dump($mikael) ?>
</pre>
