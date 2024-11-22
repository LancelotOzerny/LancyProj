<?php
namespace Core\Modules\System\Libs;

abstract class DoubleSelector extends SingleSelector
{
    protected array $innerSelectorList = [];

    public function addSelector(SingleSelector $selector) : void
    {
        $this->innerSelectorList[] = $selector;
    }

    protected function getInnerCode() : string
    {
        $html = '';

        foreach ($this->innerSelectorList as $selector)
        {
            $html .= $selector->getHtml();
        }

        return $html;
    }
}