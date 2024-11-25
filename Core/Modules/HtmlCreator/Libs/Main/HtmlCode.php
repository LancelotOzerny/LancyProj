<?php
namespace Core\Modules\HtmlCreator\Libs\Main;

class HtmlCode implements IGetHtml
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