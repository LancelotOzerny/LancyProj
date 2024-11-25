<?php
namespace Core\Modules\Patterns\Libs;

abstract class Singletoon
{
    private static self | null $instance = null;

    public static function getInstance() : static
    {
        self::$instance ??= new static();
        return static::$instance;
    }

    protected function __construct() {}
    protected function __awake() {}
    protected function __clone() {}
}