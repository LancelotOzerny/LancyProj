<?php
namespace Core\Modules\System\Libs\Components;

use Core\Modules\HtmlCreator\Libs\Main\IGetHtml;

class Component implements IGetHtml
{
    private string $name = '';
    private string $template = '';
    protected array $params = [];

    public function __construct(string $name, array $params = [])
    {
        $this->name = $name;
        $this->params = $params;
        $this->template = $this->params['template'] ?? 'Default';
    }

    private function execute() : void
    {
    	$templatePath = ROOT_DIR . "/Develop/Components/$this->name/$this->template/template.php";

		if (file_exists($templatePath))
        {
            $componentParams = $this->params;
            $templateParams = $this->getData();
			include $templatePath;
        }
	}

	private function getData() : array
    {
        $resultList = [];

        if (file_exists(ROOT_DIR . "/Develop/Components/{$this->name}/Model.php"))
        {
            $modelClass = "\\Develop\\Components\\$this->name\\Model";
			$resultList = (new $modelClass())->getData($this->params);
        }
        else if (file_exists(ROOT_DIR . "/Develop/Components/{$this->name}/{$this->template}/Model.php"))
        {
            $modelClass = "\\Develop\\Components\\{$this->name}\\{$this->template}\\Model";
            $resultList = (new $modelClass())->getData($this->params);
        }

		return $resultList;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getParams() : array
    {
        return $this->params;
    }

    public function getHtml(): string
    {
        ob_start();
        $this->execute();
        return ob_get_clean();
    }
}