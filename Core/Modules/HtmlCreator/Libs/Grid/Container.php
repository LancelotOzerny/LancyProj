<?php
namespace Core\Modules\HtmlCreator\Libs\Grid;

use Core\Modules\HtmlCreator\Libs\Main\ClosedSelector;

class Container extends ClosedSelector
{
    public function getHtml(): string
    {
        $this->addClass('container');
        return parent::getHtml();
    }

    public function createRow() : Row
    {
        $row = new Row();
        $this->addInnerElement($row);
        return $row;
    }
}