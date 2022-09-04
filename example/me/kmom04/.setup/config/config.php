<?php

// Report all type of errors
error_reporting(-1);

// Display all errors
ini_set('display_errors', '1');

// Start the named session,
// the name is based on the path to this file.
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();
