<?php

if (strpos(url(), "localhost")) {
//get minify files
    $dir = scandir(__DIR__);

    foreach ($dir as $minify) {
        $file = __DIR__ . "/{$minify}";
        //Verificar se é um arquivo css
        if (is_file($file) && pathinfo($file)['filename'] != "Minify" && pathinfo($file)['extension'] == "php") {
            require $file;
        }
    }
}
