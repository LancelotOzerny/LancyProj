<?php
/** @var \Core\Modules\System\Libs\Page $page */

$page->setParam('title', 'Сайт портфолио');


/* HEADER */
$row = $page->grid->createRow();
$row->createColumn('Title', ['title' => 'test']);
$row->addClass('py-5');


/* About me */
$container = $page->grid->createContainer();
$row = $container->createRow();
$row->addClass('py-5');


/* Portfolio Works */
$container = $page->grid->createContainer();
$row = $container->createRow();
$row->addClass('py-5');


/* FOOTER */
$row = $page->grid->createRow();
$row->addClass('py-5');