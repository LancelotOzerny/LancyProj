<?php
namespace Core\Modules\System\Libs;

class Column extends Selector
{
    public function __construct(string $componentName = '', array $params = [])
    {

    }

    public function getHtml(): string
    {
        $styles = $this->getClassAttr();
        $html = "<div $styles >Column</div>";
        return $html;
    }
}