<?php

/**
 * Configuration settings
 */

declare(strict_types=1);

// The autoloader must be loaded first
require '../vendor/autoload.php';

// Load configuration from .venv files
Dotenv\Dotenv::createImmutable('..')
    ->load();

// Set error reporting details
error_reporting(intval($_ENV['ERROR_REPORTING'] ?? -1));
ini_set('display_errors', $_ENV['DISPLAY_ERRORS'] ?? '1');

// Set a default exception handler to show details of uncaught exceptions
set_exception_handler($_ENV['EXCEPTION_HANDLER'] ?? null);

// Start the named session, the name is based on the path to this file
session_name(
    substr(preg_replace('/[^a-z\d]/i', '', __DIR__) ?? "default", -20)
);
session_start();
