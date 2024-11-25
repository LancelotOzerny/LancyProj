<?php
namespace Core\Modules\HtmlCreator\Libs\Grid;

use Core\Modules\HtmlCreator\Libs\Main\ClosedSelector;

class Column extends ClosedSelector
{
    public function getHtml(): string
    {
        $this->addClass('col');
        return parent::getHtml();
    }
}