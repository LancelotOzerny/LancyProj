<?php
namespace Core\Modules\System\Libs;

class Row extends DoubleSelector
{
    public function createColumn(string $componentName = '', $columnParams = []) : Column
    {
        $column = new Column($componentName, $columnParams);
        $this->innerSelectorList[] = $column;
        return $column;
    }

    public function getHtml() : string
    {
        $html = $this->getInnerCode();

        $this->addClass('row');
        $styles = $this->getClassAttr();

        return "<div " . $this->getAttrStr() . "$styles>$html</div>";
    }
}