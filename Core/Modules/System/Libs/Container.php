<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Row;
use Core\Modules\System\Libs\RowList;

class Container extends RowList
{
    private array $rowList = [];

    public function pushRow(Row $row) : void
    {
        $this->rowList[] = $row;
    }

    public function getHtml() : string
    {
        $html = '';
        foreach ($this->rowList as $row)
        {
            $html .= $row->getHtml();
        }

        $html = "<div class='container'>$html</div>";

        return $html;
    }
}