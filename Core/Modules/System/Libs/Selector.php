<?php

namespace Core\Modules\System\Libs;

abstract class Selector
{
    private array $classList = [];

    public function getClassList() : array
    {
        return $this->classList;
    }

    public function addClass(string $class) : void
    {
        $this->classList[] = $class;
    }

    public function getClassAttr() : string
    {
        $classes = join(' ', $this->classList);
        return "class='$classes'";
    }

    public abstract function getHtml() : string;
}