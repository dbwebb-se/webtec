<?php

$rememberMyName = $_POST["doit"]    ?? null;
$forgetMyName   = $_POST["forget"]  ?? null;

$name = $_POST["name"] ?? null;
$key = "my_name_is";

if ($rememberMyName) {
    setCookie($key, $name);
} elseif ($forgetMyName) {
    setcookie($key, '', time() - 3600);
}

header("Location: cookie.php");
