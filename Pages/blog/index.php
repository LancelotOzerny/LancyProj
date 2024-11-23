<?php
/** @var \Core\Modules\System\Libs\Page $page */

$page->setParam('title', 'Сайт портфолио: Блог');

$page->grid->createContainer()->createRow()->createColumn()->addSelector(new \Core\Modules\System\Libs\Selectors\HtmlCode(<<<"HTML"
    <h2 style="font-size: 3rem">Blog</h2>
HTML));