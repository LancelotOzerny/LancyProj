<?php
namespace Develop\Components\Navigation;

class Model extends \Core\Modules\System\Libs\Components\Model
{
    public function getData(array $data = []): array
    {
        $resultList = [];

        /* ════════ LINK ITEMS ════════ */
        $resultList['items'] = [];
        foreach ($data['items'] as $key => $value)
        {
            $url = $_SERVER['REQUEST_URI'];

            $resultList['items'][] = [
                'href' => $value['href'] ?? '#',
                'active' => $value['active'] ?? ($value['href'] === $url),
                'name' => $value['name'] ?? $key ?? 'link',
            ];
        }


        /* ════════ LOGO ════════ */
        if ($data['logo'])
        {
            $resultList['logo']['src'] = $data['logo']['src'] ?? '/favicon.ico';

            if ($data['logo']['height'])
            {
                $resultList['logo']['height'] = $data['logo']['height'];
            }

            if ($data['logo']['width'])
            {
                $resultList['logo']['width'] = $data['logo']['width'];
            }
        }


        /* ════════ RESULT ════════ */
        return $resultList;
    }
}