<?php
/** @var \Core\Modules\System\Libs\Page $page */

use Core\Modules\System\Libs\Components\Component;
use Core\Modules\HtmlCreator\Libs\Main\HtmlCode;
use Core\Modules\HtmlCreator\Libs\Main\Text;

$page->grid->createContainer()->createRow()
    ->addClass('py-5')

    ->createColumn()
    ->addClass('text-center')
    ->addAttr('style', 'font-family: sans-serif; font-size: 2rem;')
    ->addInnerElement(new Component('Title', ['content' => 'Lancy Proj']));