<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Row;
use Core\Modules\System\Libs\RowList;

class Grid extends RowList
{
    private array $gridElements = [];

    public function createContainer() : Container
    {
        $container = new Container();
        $this->gridElements[] = $container;
        return $container;
    }

    public function pushRow(\Core\Modules\System\Libs\Row $row): void
    {
        $this->gridElements[] = $row;
    }

    public function getHtml() : string
    {
        $gridHtml = '';

        foreach ($this->gridElements as $element)
        {
            $gridHtml .= $element->getHtml();
        }

        return $gridHtml;
    }
}