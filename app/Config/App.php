<?php

// Get .env File
use Dotenv\Dotenv;

if (!file_exists(dirname(__DIR__, 2) . "/.env")) {
    die("Your project not exist .env file. Copy .env.example and rename it to .env");
}
Dotenv::createImmutable(dirname(__DIR__, 2))->load();

if ($_ENV['environment'] === "dev") {
    require __DIR__ . "/Boot/development.php";
} else {
    require __DIR__ . "/Boot/production.php";
}
