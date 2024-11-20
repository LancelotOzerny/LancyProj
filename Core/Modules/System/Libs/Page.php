<?php
namespace Core\Modules\System\Libs;

class Page
{
    private array $params = [];
    private static null | self $instance = null;
    private function __construct() {}

    public static function getInstance() : self
    {
        if (is_null(self::$instance))
        {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function init(array $params) : void
    {
        $this->params = $params;
    }

    public function getParams() : array
    {
        return $this->params;
    }
}