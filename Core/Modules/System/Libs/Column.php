<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Components\Component;

class Column extends DoubleSelector
{
    public function getHtml(): string
    {
        $html = $this->getInnerCode();
        $styles = $this->getClassesStr();
        return "<div $styles>$html</div>";
    }
}