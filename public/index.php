<?php

ob_start();

// Verify Version PHP
$minPHP = '7.2';
if (phpversion() < $minPHP) {
    die("Your PHP version must be {$minPHP}. Current version: " . phpversion());
}
unset($minPHP);

require __DIR__ . "/../vendor/autoload.php";

ob_end_flush();
