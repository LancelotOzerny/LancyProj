<?php
namespace Core\Modules\System\Libs;

class Row extends Selector
{
    private array $columns = [];

    public function createColumn(string $componentName = '', $columnParams = []) : Column
    {
        $column = new Column($componentName, $columnParams);
        $this->columns[] = $column;
        return $column;
    }

    public function getColumnList() : array
    {
        return $this->columns;
    }

    public function getHtml() : string
    {
        $html = '';

        foreach ($this->columns as $column)
        {
            $html .= $column->getHtml();
        }

        $this->addClass('row');
        $styles = $this->getClassAttr();

        return "<div $styles>$html</div>";;
    }
}