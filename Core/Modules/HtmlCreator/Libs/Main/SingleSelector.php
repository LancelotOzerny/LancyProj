<?php
namespace Core\Modules\HtmlCreator\Libs\Main;

class SingleSelector extends Selector
{
    protected string $content = '';

    public function getHtml(): string
    {
        $attrLine = $this->getAttrLine();
        $html = "<$this->selector $attrLine/>";
        return $html;
    }

    protected function setInnerText(string $text) : void
    {
        $this->content .= htmlspecialchars($text);
    }

    protected function setInnerHtml(string $html) : void
    {
        $this->content .= $html;
    }
}