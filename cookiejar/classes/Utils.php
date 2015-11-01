<?php

/**
 * The Utils class is a collection of functions that can aid in the development of your Cookie Jar application.
 */

namespace WiseBiscuit\CookieJar;

/**
 * Class Utils
 * @package WiseBiscuit\CookieJar
 */
class Utils
{
    /**
     * @param mixed $var
     */
    public static function dump($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}