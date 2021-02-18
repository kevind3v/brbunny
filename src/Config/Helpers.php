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
            return SITE['root'] . path($path);
        }
        return SITE['root'];
    }
    if ($path) {
        return SITE['domain'] . path($path);
    }
    return SITE['domain'];
}
