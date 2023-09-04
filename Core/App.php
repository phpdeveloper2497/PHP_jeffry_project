<?php

namespace Core;

class App
{
    protected static $storage;
    public static function setContainer($container)
    {
        static::$storage = $container;
    }
    public static function getContainer()
    {
        return static::$storage;
    }
    public static function bind($key, $resolve)
    {
        static::getContainer()->bind($key, $resolve);
    }

    public static function resolve($key)
    {
         return static::getContainer()->resolve($key);
    }
}