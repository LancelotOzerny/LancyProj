<?php
/** @var \Core\Modules\System\Libs\Page $page */

$page->setParam('title', 'Сайт портфолио');


/* HEADER */
$row = $page->grid->createRow();
$row->createColumn('Title', ['title' => 'test']);
$row->addClass('py-5');


/* About me */
$row = $page->grid->createRow();
$row->containerIncluded = true;
$row->addClass('py-5');


/* Portfolio Works */
$row = $page->grid->createRow();
$row->containerIncluded = true;
$row->addClass('py-5');


/* FOOTER */
$row = $page->grid->createRow();
$row->addClass('py-5');