<?php

namespace WiseBiscuit\CookieJar;

/**
 * Class Request
 * @package WiseBiscuit\CookieJar
 */
class Request
{
    /**
     * @param string $url
     */
    public static function redirect($url)
    {
        header('Location: ' . $url);
    }
}