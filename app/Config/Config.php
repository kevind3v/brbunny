<?php

define("ENVIRONMENT", $_ENV['environment']);

/** ABOUT */
define("SITE", [
    "name" =>  $_ENV['app.name'],
    "title" =>  $_ENV['app.title'],
    "desc" =>  $_ENV['app.desc'],
    "locale" => $_ENV['app.lang'],
    "url" => [
        "base" => $_ENV['app.url.domain'],
        "dev" => $_ENV['app.url.root']
    ],
]);

/** Constant Date */
define("DATE", [
    "br" => "d/m/Y H:i:s",
    "app" => "Y-m-d H:i:s"
]);


/** Constant template */
define('VIEWS', [
    "shared" => dirname(__DIR__, 2) . "/shared/views/",
    "default" => dirname(__DIR__, 2) . "/themes/",
    "web" => "welcome"
]);
