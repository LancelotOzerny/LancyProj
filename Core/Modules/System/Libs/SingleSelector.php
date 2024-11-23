<?php

namespace Core\Modules\System\Libs;

abstract class SingleSelector
{
    protected array $classList = [];

    public function getClassList() : array
    {
        return $this->classList;
    }

    public function addClass(string $class) : SingleSelector
    {
        $this->classList[] = $class;
        return $this;
    }

    public function getClassAttr() : string
    {
        $classes = join(' ', $this->classList);
        return "class='$classes'";
    }

    public abstract function getHtml() : string;
}