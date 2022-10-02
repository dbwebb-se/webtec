<?php

// Include the config file
include("config/config.php");

// Perform the logout by clearing the session data
unset($_SESSION["user"]);

// Do a redirect
header("Location: login.php");
exit();
