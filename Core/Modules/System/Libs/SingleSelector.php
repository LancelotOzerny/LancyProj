<?php

namespace Core\Modules\System\Libs;

abstract class SingleSelector
{
    protected array $classList = [];
    protected array $attrList = [];

    public function getClassList() : array
    {
        return $this->classList;
    }

    public function getAttrList() : array
    {
        return $this->attrList;
    }

    public function getAttrStr() : string
    {
        $str = '';
        foreach ($this->attrList as $key => $value)
        {
            $str .= "$key='$value' ";
        }
        return $str;
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

    public function setAttr(string $name, string $value) : Row
    {
        $this->attrList[$name] = $value;

        return $this;
    }

    public abstract function getHtml() : string;
}