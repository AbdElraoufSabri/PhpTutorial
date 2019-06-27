<?php


class Request
{

    /**
     * Request constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}