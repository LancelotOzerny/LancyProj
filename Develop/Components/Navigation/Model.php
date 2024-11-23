<?php
namespace Develop\Components\Navigation;

class Model extends \Core\Modules\System\Libs\Components\Model
{
    public function getData(array $data = []): array
    {
        $items = [];

        foreach ($data['items'] as $key => $value)
        {
            $url = $_SERVER['REQUEST_URI'];

            $items[] = [
                'href' => $value['href'] ?? '#',
                'active' => $value['active'] ?? ($value['href'] === $url),
                'name' => $value['name'] ?? $key ?? 'link',
            ];
        }

        return [
            'items' => $items
        ];
    }
}