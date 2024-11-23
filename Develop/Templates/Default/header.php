<?php
/** @param \Core\Modules\System\Libs\Page $this */

use Core\Modules\System\Libs\Page;
use Core\Modules\System\Libs\Selectors\HtmlCode;
use Core\Modules\System\Libs\Components\Component;

$page = Page::getInstance();

$page->grid->addSelector(new HtmlCode(<<<"HTML"
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{$page->getFutureParam('title')}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/core/style.css">
    
    <style>
        body 
        {
            font-family: "Inter", serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        
        .main-header
        {
            min-height: 100vh;
            background-image: url(/assets/images/background/main.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>
</head>
<body>
HTML));

$row = $page->grid->createRow()
->addClass('py-2')
->addClass('px-5')
->setAttr('style', 'position: fixed; width: 100%;');

$row->createColumn()->addClass('col-12')->addSelector(new Component('Navigation', [
    'template' => 'Default',
    'logo' => [
        'src' => '/assets/sprites/logo.png',
    ],
    'items' => [
        'Главная' => [ 'href' => '/' ],
        [
            'href' => '/blog/',
            'name' => 'Блог',
        ],
        'Портфолио' => [ 'href' => '/portfolio/' ],
        'Контакты' => [ 'href' => '/contacts/' ],
    ]
]));