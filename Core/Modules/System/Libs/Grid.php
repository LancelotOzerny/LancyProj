<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Container;
use Core\Modules\System\Libs\Row;

class Grid extends DoubleSelector
{
    public function createRow() : Row
    {
        $row = new Row();
        $this->innerSelectorList[] = $row;
        return $row;
    }

    public function createContainer() : Container
    {
        $container = new Container();
        $this->innerSelectorList[] = $container;
        return $container;
    }

    public function getHtml() : string
    {
        return $this->getInnerCode();
    }
}