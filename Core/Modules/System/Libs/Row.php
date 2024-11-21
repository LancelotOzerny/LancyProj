<?php
namespace Core\Modules\System\Libs;

class Row
{
    public bool $containerIncluded = false;
    private array $columns = [];

    public function addColumn(Column $column)
    {
        $this->columns[] = $column;
    }

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
        $html = 'Row';
        if ($this->containerIncluded)
        {
            $html = "<div class='container'>$html</div>";
        }

        return "<div class='row'>$html</div>";;
    }
}