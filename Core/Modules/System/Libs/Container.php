<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Row;

class Container extends DoubleSelector
{
    public function createRow() : Row
    {
        $row = new Row();
        $this->innerSelectorList[] = $row;
        return $row;
    }

    public function getHtml() : string
    {
        $html = $this->getInnerCode();
        return "<div class='container'>$html</div>";
    }
}