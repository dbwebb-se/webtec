<?php

include('../config/config.php');

// Add a randomized number to the session
$_SESSION["magic"] = rand(1, 100);

// Increment the session by one each time it is accessed
$increment = $_SESSION["increment"] ?? 0;
$increment += 1;
$_SESSION["increment"] = $increment;

// Redirect to the session page
header("Location: session.php");
exit();
