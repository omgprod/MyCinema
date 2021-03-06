<?php
/**
 * Created by PhpStorm.
 * User: omg-p
 * Date: 07/10/2018
 * Time: 23:54
 */

namespace Core;


class Flash
{
    private static $flash = null;

    public static function set($flash = null)
    {
        if ($flash != null) {
            self::$flash['type'] = $flash[0];
            self::$flash['message'] = $flash[1];
        }
        else
        {
            self::$flash = $flash;
        }
    }

    public static function get()
    {
        if (self::$flash != null) {
            return self::$flash;
        }
        return null;
    }
}