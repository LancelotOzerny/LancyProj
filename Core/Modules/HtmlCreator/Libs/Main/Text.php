<?php
namespace Core\Modules\HtmlCreator\Libs\Main;

class Text implements IGetHtml
{
    private string $text = '';

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getHtml(): string
    {
        return htmlspecialchars($this->text);
    }
}