<?php
namespace Core\Modules\HtmlCreator\Libs\Grid;

use Core\Modules\HtmlCreator\Libs\Main\IGetHtml;

class Grid
{
    private array $gridElements = [];

    public function getHtml() : string
    {
        $html = '';
        foreach ($this->gridElements as $element)
        {
            $html .= $element->getHtml();
        }

        return $html;
    }

    public function createContainer() : Container
    {
        $container = new Container();
        $this->addNewElement($container);
        return $container;
    }

    public function createRow() : Row
    {
        $row = new Row();
        $this->addNewElement($row);
        return $row;
    }

    public function addNewElement(IGetHtml $element) : static
    {
        $this->gridElements[] = $element;
        return $this;
    }
}