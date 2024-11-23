<?php
namespace Core\Modules\System\Libs;

use Core\Modules\System\Libs\Grid;

class Page
{
    private array $params = [];
    private static null | self $instance = null;
    private function __construct() {}
    public readonly Grid | null $grid;

    public static function getInstance() : self
    {
        if (is_null(self::$instance))
        {
            self::$instance = new static();
            self::$instance->init();
        }

        return self::$instance;
    }

    private array $futureParams = [];

    public function getFutureParam(string $name) : string
    {
        //  дальнейшем можно подобрать случайный хеш
        return '{##' . mb_strtoupper($name) . '##}';
    }

    public function setFutureParam(string $name, string $value) : void
    {
        $this->futureParams[$name] = $value;
    }

    public function build() : void
    {
        $html = $this->grid->getHtml();

        if ($this->futureParams)
        {
            $find = $replace = [];
            foreach ($this->futureParams as $key => $value)
            {
                $find[] = '{##' . mb_strtoupper($key) . '##}';
                $replace[] = $value;
            }

            $html = str_replace($find, $replace, $html);
        }

        echo $html;
    }

    private function init() : void
    {
        $this->grid = new Grid();
    }

    public function setParam(string $name, mixed $value)
    {
        $this->params[$name] = $value;
    }

    public function getParam(string $name)
    {
        return $this->params[$name] ?? null;
    }

    public function getParamsList() : array
    {
        return $this->params;
    }

    public function inParamList(string $name)
    {
        return array_key_exists($name, $this->params);
    }

    public function includeHeader() : void
    {
        $template = $this->getParam('template') ?? 'Default';

        if (file_exists($templatePath = ROOT_DIR . "/Develop/Templates/$template/header.php"))
        {
            include $templatePath;
        }
        else
        {
            echo "template $template is not contain header.php";
        }
    }

    public function includeFooter() : void
    {
        $template = $this->getParam('template') ?? 'Default';

        if (file_exists($templatePath = ROOT_DIR . "/Develop/Templates/$template/footer.php"))
        {
            include $templatePath;
        }
        else
        {
            echo "template $template is not contain footer.php";
        }
    }
}