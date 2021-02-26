<?php

//---------------------//
//----- VALIDATE ------//
//---------------------//
/**
 * @param string $email
 * @return boolean
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * @param string $passwd
 * @return boolean
 */
function is_passwd(string $passwd): bool
{
    if (password_get_info($passwd)['algo']) {
        return true;
    }
    return false;
}

/**
 * @param string $passwd
 * @return string
 */
function passwd(string $passwd): string
{
    if (!empty(password_get_info($passwd)['algo'])) {
        return $passwd;
    }
    return password_hash($passwd, PASSWD['algo'], PASSWD['option']);
}

/**
 * @param string $passwd
 * @param string $hash
 * @return boolean
 */
function passwd_verify(string $passwd, string $hash): bool
{
    return password_verify($passwd, $hash);
}

/**
 * @param string $hash
 * @return boolean
 */
function passwd_rehash(string $hash): bool
{
    return password_needs_rehash($hash, PASSWD['algo'], PASSWD['option']);
}

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

/**
 * @param string $url
 */
function redirect(string $url): void
{
    header("HTTP/1.1 302 Redirect");
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: {$url}");
        exit;
    }
    if (filter_input(INPUT_GET, "route", FILTER_DEFAULT) != $url) {
        $location = url($url);
        header("Location: {$location}");
        exit;
    }
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


/**
 *
 * @param string $path
 * @return string
 */
function package(string $path): string
{
    return url("node_modules/" . path($path));
}

//-----------------//
//----- DATA ------//
//-----------------//

/**
 * @param string $date
 * @param string $format
 * @return string
 */
function date_fmt(string $date = "now", string $format = "d/m/Y H\hi"): string
{
    return (new DateTime($date))->format($format);
}

/**
 * @param string $date
 * @return string
 */
function date_fmt_br(string $date): string
{
    return (new DateTime($date))->format(DATE['br']);
}

/**
 * @param string $date
 * @return string
 */
function date_fmt_app(string $date): string
{
    return (new DateTime($date))->format(DATE['app']);
}

/**
 * @param string $date
 * @return string
 */
function date_str(string $date, string $format = "%d %b, %Y - %H:%M"): string
{
    return strftime($format, strtotime($date));
}
