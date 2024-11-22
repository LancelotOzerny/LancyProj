<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Components\Component;

class Column extends DoubleSelector
{
    private Component | null $component = null;

    public function __construct(string $componentName = '', array $params = [])
    {
        $this->component = new Component($componentName, $params);
    }

    public function getHtml(): string
    {
        $html = $this->getInnerCode();
        if ($this->component)
        {
            ob_start();
            $this->component->execute();
            $html .= ob_get_contents();
            ob_clean();
        }

        $styles = $this->getClassAttr();
        $html = "<div $styles >$html</div>";
        return $html;
    }
}