<?php
namespace Core\Modules\HtmlCreator\Libs\Grid;

use Core\Modules\HtmlCreator\Libs\Main\ClosedSelector;

class Row extends ClosedSelector
{
    public function createColumn() : Column
    {
        $col = new Column();
        $this->addInnerElement($col);
        return $col;
    }

    public function getHtml(): string
    {
        $this->addClass('row');
        return parent::getHtml();
    }
}