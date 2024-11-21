<?php

namespace Core\Modules\System\Libs;

class Selector
{
    private array $classList = [];

    public function addClass(string $class) : void
    {
        $this->classList[] = $class;
    }

    public function getClassAttr() : string
    {
        $classes = join(' ', $this->classList);
        return "class='$classes'";
    }
}