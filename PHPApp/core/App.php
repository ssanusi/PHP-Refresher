<?php

namespace App\Core {


    use Exception;

    class App
    {
        protected static array $registry = [];

        public static function bind(string $key, $value)
        {
            static::$registry[$key] = $value;
        }

        public static function get(string $key)
        {
            if(!array_key_exists($key, static::$registry)){
                throw new Exception('key not exist');
            }

            return static::$registry[$key];
        }
    }
}