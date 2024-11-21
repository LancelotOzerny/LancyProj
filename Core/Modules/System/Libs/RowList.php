<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Row;

abstract class RowList extends Selector
{
    public function createRow() : Row
    {
        $row = new Row();
        $this->pushRow($row);
        return $row;
    }

    public abstract function pushRow(Row $row) : void;
}