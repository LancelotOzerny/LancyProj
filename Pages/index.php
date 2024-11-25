<?php
/** @var \Core\Modules\System\Libs\Page $page */

use Core\Modules\System\Libs\Components\Component;
use Core\Modules\HtmlCreator\Libs\Grid\Container;
use Core\Modules\HtmlCreator\Libs\Main\HtmlCode;

$page->setFutureParam('title', 'Сайт портфолио');

//  ═════════════════════════
//  HEADER
//  ═════════════════════════
$row = $page->grid->createRow()
    ->addClass('v-100 main-header py-10')
    ->addInnerElement($container = new Container());

$row = $container->createRow()
    ->setAttr('style', [
        'height: 100%;',
        'align-items: center;',
        'justify-content: center;',
    ]);

$col = $row->createColumn()
    ->addClass('col-5')
    ->setAttr('style', [
        'display: grid;',
        'color: #fff;',
        'text-shadow: 0 0 2px #000; gap: 15px;',
    ])
    ->addInnerElement(new Component('Title', ['content' => 'Lancy Studio']))
    ->addInnerElement(new HtmlCode(<<<'HTML'
    <p class="my-1">Web разработка, создание игр, дизайн</p>
    HTML));

$col = $row->createColumn()
    ->addClass('col-5')
    ->setAttr('style', [
        'display: grid;',
        'color: #fff;',
        'text-shadow: 0 0 2px #000; gap: 15px;',
    ])

    ->addInnerElement(new Component('Title', ['content' => 'WEB-разработка', 'level' => 3]))
    ->addInnerElement(new HtmlCode(<<<'HTML'
        <p class="mb-3">Сайтов на Frontend языках HTML5, CSS3 (SCSS), JavaScript (TypeScript), серверном языке PHP и фреймворке 1C bitrix</p> 
    HTML))

    ->addInnerElement(new Component('Title', ['content' => 'Gamedev', 'level' => 3]))
    ->addInnerElement(new HtmlCode(<<<'HTML'
        <p class="mb-3">Разработка Desktop и мобильных 2D видеоигр различных жанров на игровом движке Unity и языке программирования C#</p> 
    HTML))

    ->addInnerElement(new Component('Title', ['content' => 'Дизайн', 'level' => 3]))
    ->addInnerElement(new HtmlCode(<<<'HTML'
    <p>От простых Landing Page до многостраничных сайтов</p>
    HTML));


//  ═════════════════════════
//  ABOUT ME
//  ═════════════════════════
$container = \Core\Modules\System\Libs\Page::getInstance()->grid->createContainer()
    ->setAttr('style', [
        'display: grid;',
        'grid-template-rows: 200px 1fr;',
    ])
    ->addClass('py-10');

$container->createRow()
    ->createColumn()
    ->addClass('col-6')
    ->addInnerElement(new Component('Title', [
        'template' => 'Side',
        'content' => 'О себе в двух словах',
    ]));