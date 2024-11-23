<?php
/** @param \Core\Modules\System\Libs\Page $this */

use Core\Modules\System\Libs\Page;
use Core\Modules\System\Libs\Selectors\HtmlCode;

$title = $this->getParam('title');

$page = Page::getInstance();
$page->grid->addSelector(new HtmlCode(<<<"HTML"
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>$title</title>

    <link rel="stylesheet" href="/assets/core/style.css">
    <link rel="stylesheet" href="/test.php">
</head>
<body>
HTML));

$row = $page->grid->createRow()
->addClass('py-3')
->addClass('px-5');

$row->createColumn('Navigation', [
    'template' => 'Default',
    'items' => [
        'Главная' => [ 'href' => '/' ],
        [
            'href' => '/blog/',
            'name' => 'Блог',
        ],
        'Портфолио' => [ 'href' => '/portfolio/' ],
        'Контакты' => [ 'href' => '/contacts/' ],
    ]
])->addClass('col-12');