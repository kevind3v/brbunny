<?php

/** URL */

define("BASE_URL", $_ENV['app.root']);
define("DOMAIN", $_ENV['app.domain']);

/** Constant Date */
define("DATE", [
    "br" => "d/m/Y H:i:s",
    "app" => "Y-m-d H:i:s"
]);


/** Constant template */
define("BRPLATES", dirname(__DIR__, 2) . "/resources");
