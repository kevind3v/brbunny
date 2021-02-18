<?php

/** ENVIRONMENT */

define("ENVIRONMENT", $_ENV['app.environment']);

/** ABOUT */
define("SITE", [
    "name" => $_ENV['app.name'],
    "description" => $_ENV['app.desc'],
    "domain" => $_ENV['app.domain'],
    "root" => $_ENV['app.root'],
    "lang" => $_ENV['app.lang']
]);

/** Constant Date */
define("DATE", [
    "br" => "d/m/Y H:i:s",
    "app" => "Y-m-d H:i:s"
]);


/** Constant template */
define("BRPLATES", dirname(__DIR__, 2) . "/resources");
