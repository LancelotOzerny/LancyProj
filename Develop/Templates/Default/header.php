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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/core/style.css">
    
    <style>
        body {
            font-family: "Inter", serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
    </style>
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