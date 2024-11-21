<?php
namespace Core\Modules\System\Libs\Components;

class Component
{
    private string $name = '';
    protected array $params = [];

    public function __construct(string $name, array $params = [])
    {
        $this->name = $name;
        $this->params = $params;
    }

    public function execute() : void
    {
    	$templatePath = ROOT_DIR . "/Develop/Components/$this->name/template.php";

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
        $modelClass = "\\Develop\\Components\\$this->name\\Model";
        $modelPath = ROOT_DIR . "/Develop/Components/{$this->name}/Model.php";

        if (file_exists($modelPath))
        {
			$resultList = (new $modelClass())->getData();
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
}