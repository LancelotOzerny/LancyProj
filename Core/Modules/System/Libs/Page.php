<?php
namespace Core\Modules\System\Libs;

use Core\Modules\HtmlCreator\Libs\Grid\Grid;
use Core\Modules\Patterns\Libs\Singletoon;

class Page extends Singletoon
{
    protected array $params = [];
    public readonly Grid | null $grid;
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

    protected function __construct()
    {
        $this->init();
        parent::__construct();
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

    public function inParamList(string $name) : bool
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