<?php

// Include the config file
include("config/config.php");

// Check if user is logged in or redirect to login
$user = checkIfUserLoggedInOrRedirectToLogin();

// Get the header with the navbar
require "view/header.php";

// Include the view with a form
require "view/change_password.php";
