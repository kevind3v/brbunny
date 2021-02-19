<?php

use MatthiasMullie\Minify\CSS;
use MatthiasMullie\Minify\JS;

$minCSS = new CSS();
$minCSS->add(dirname(__DIR__, 3) . "/shared/styles/boot.css");

//Theme CSS
$cssDir = scandir(VIEWS['default'] . VIEWS['web'] . "/assets/css");

foreach ($cssDir as $css) {
    $cssFile = VIEWS['default'] . VIEWS['web'] . "/assets/css/{$css}";
    //Verificar se é um arquivo css
    if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
        $minCSS->add($cssFile);
    }
}

//Minify CSS
$minCSS->minify(VIEWS['default'] . VIEWS['web'] . "/assets/style.min.css");

// JS
$minJS = new JS();
$minJS->add(dirname(__DIR__, 3) . "/shared/scripts/script.js");

//Theme CSS
$jsDir = scandir(VIEWS['default'] . VIEWS['web'] . "/assets/js");

foreach ($jsDir as $js) {
    $jsFile = VIEWS['default'] . VIEWS['web'] . "/assets/js/{$js}";
    //Verificar se é um arquivo css
    if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
        $minJS->add($jsFile);
    }
}

$minJS->minify(VIEWS['default'] . VIEWS['web'] . "/assets/scripts.min.js");
