<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Grid;

class Page
{
    private array $params = [];
    private static null | self $instance = null;
    private function __construct() {}
    public readonly Grid | null $grid;

    public static function getInstance() : self
    {
        if (is_null(self::$instance))
        {
            self::$instance = new static();
            self::$instance->init();
        }

        return self::$instance;
    }

    public function build() : void
    {
        $html = $this->grid->getHtml();
        echo $html;
    }

    private function init() : void
    {
        $this->grid = new Grid();
    }

    public function setParam(string $name, mixed $value)
    {
        $this->params[$name] = $value;
    }

    public function getParam(string $name)
    {
        return $this->params[$name] ?? null;
    }

    public function getParamsList() : array
    {
        return $this->params;
    }
}