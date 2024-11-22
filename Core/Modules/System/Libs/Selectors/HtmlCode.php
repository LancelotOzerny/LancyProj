<?php

namespace Core\Modules\System\Libs\Selectors;

use Core\Modules\System\Libs\SingleSelector;

class HtmlCode extends SingleSelector
{
    private string $code = '';

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function getHtml(): string
    {
        return $this->code;
    }
}