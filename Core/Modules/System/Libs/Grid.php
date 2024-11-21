<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Row;

class Grid
{
    private $rowList = [];
    private Row | null $currentRow = null;

    public function createRow() : Row
    {
        $row = new Row();
        $this->pushRowToList($row);
        return $row;
    }

    public function addRow(Row $row) : void
    {
        $this->pushRowToList($row);
    }

    private function pushRowToList(Row $row)
    {
        $this->rowList[] = $row;
        $this->currentRow = $row;
    }

    public function getRowList() : array
    {
        return $this->rowList;
    }

    public function getHtml() : string
    {
        $gridHtml = '';

        foreach ($this->rowList as $row)
        {
            $gridHtml .= $row->getHtml();
        }

        return $gridHtml;
    }

    public function getCurrentRow()
    {
        if (is_null($this->currentRow))
        {
            $this->currentRow = $this->createRow();
        }

        return $this->currentRow;
    }
}