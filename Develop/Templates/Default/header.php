<?php
/** @param \Core\Modules\System\Libs\Page $this */

use Core\Modules\System\Libs\Page;
use Core\Modules\HtmlCreator\Libs\Main\HtmlCode;
use Core\Modules\System\Libs\Components\Component;

$page = Page::getInstance();

$page->grid->addNewElement(new HtmlCode(<<<"HTML"
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <title>Lancy Proj</title>
    </head>
    <body>
    HTML));