<?php
/** @param \Core\Modules\System\Libs\Page $this */

use Core\Modules\System\Libs\Page;
use Core\Modules\HtmlCreator\Libs\Main\HtmlCode;
use Core\Modules\HtmlCreator\Libs\Main\Text;
use Core\Modules\System\Libs\Components\Component;

$page = Page::getInstance();

$page->grid->addNewElement(new HtmlCode(<<<"HTML"
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
        html
        {
            font-size: 18px;
        }
    
        body 
        {
            font-family: "Inter", serif;
            line-height: 150%;
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
->setAttr('style', [
    'position: fixed;',
    'width: 100%;'
]);

$row->createColumn()->addClass('col-12')->addInnerElement(new Component('Navigation', [
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