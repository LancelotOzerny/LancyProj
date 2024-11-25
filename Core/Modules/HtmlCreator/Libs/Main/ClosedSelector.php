<?php
namespace Core\Modules\HtmlCreator\Libs\Main;

class ClosedSelector extends Selector
{
    protected array $innerElements = [];

    public function getHtml(): string
    {
        $content = '';
        foreach ($this->innerElements as $element)
        {
            $content .= $element->getHtml();
        }

        $attrLine = $this->getAttrLine();
        $html = "<$this->selector $attrLine>$content</$this->selector>";
        return $html;
    }

    public function addInnerElement(IGetHtml $element) : static
    {
        $this->innerElements[] = $element;
        return $this;
    }
}