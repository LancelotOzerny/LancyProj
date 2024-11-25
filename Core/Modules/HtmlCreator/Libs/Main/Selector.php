<?php
namespace Core\Modules\HtmlCreator\Libs\Main;

abstract class Selector implements IGetHtml
{
    protected string $selector = '';
    protected array $params = [];

    public function __construct(string $selector = '')
    {
        if (strlen($selector) === 0)
        {
            $selector = 'div';
        }

        if ($selector[0] === '.')
        {
            $this->params['attributes']['class'] = $selector;
        }
        else if ($selector[0] === '#')
        {
            $this->params['attributes']['id'] = $selector;
        }

        $this->selector = $selector;

        return $this;
    }

    public function addClass(string $classname) : static
    {
        $this->addAttr('class', $classname);
        return $this;
    }

    public function addId(string $id) : static
    {
        $this->addAttr('id', $id);
        return $this;
    }

    public function addAttr(string $name, string $value) : static
    {
        $this->params['attributes'][$name][] = $value;
        return $this;
    }

    public function setAttr(string $name, array $values) : static
    {
        $this->params['attributes'][$name] = $values;
        return $this;
    }

    protected function getAttrLine() : string
    {
        $attrLine = '';

        foreach ($this->params['attributes'] as $key => $values)
        {
            $attrLine .= $key . '="' . join(' ', $values) . '" ';
        }

        return $attrLine;
    }
}