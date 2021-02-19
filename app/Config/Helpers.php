<?php

//----------------//
//----- URL ------//
//----------------//

/**
 * @param string|null $path
 * @return string
 */
function path(?string $path): string
{
    return "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
}

/**
 * Get URL
 * @param string|null $path
 * @return string
 */
function url(?string $path = "/"): string
{
    if (ENVIRONMENT === "dev") {
        if ($path) {
            return SITE['url']['dev'] . path($path);
        }
        return SITE['url']['dev'];
    }
    if ($path) {
        return SITE['url']['base'] . path($path);
    }
    return SITE['url']['base'];
}

//-------------------//
//----- ASSETS ------//
//-------------------//

/**
 *
 * @param string $path
 * @return string
 */
function themes(string $path = null, string $template = VIEWS['web']): string
{
    if ($path) {
        return url("themes/{$template}/" . path($path));
    }
    return url("themes/{$template}");
}
