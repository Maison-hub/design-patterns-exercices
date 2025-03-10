<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config
{
    private static $instance = null;
    private $data;

    private function __construct()
    {
        $this->data = require dirname(__DIR__) . '/config/config.php';
    }

    public static function getInstance(): Config
    {
        if (is_null(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get(string $key)
    {
        return $this->data[$key] ?? null;
    }
}