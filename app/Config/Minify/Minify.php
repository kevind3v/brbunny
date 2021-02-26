<?php

if (strpos(url(), "localhost")) {
    $dir = scandir(__DIR__);

    foreach ($dir as $minify) {
        $file = __DIR__ . "/{$minify}";
        if (is_file($file) && pathinfo($file)['filename'] != "Minify" && pathinfo($file)['extension'] == "php") {
            require $file;
        }
    }
}
