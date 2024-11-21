<?php
/** @var \Core\Modules\System\Libs\Page $page */

$page->setParam('title', 'Сайт портфолио');


/* HEADER */
$row = $page->grid->createRow();
$row->createColumn('Title', ['title' => 'test']);


/* About me */
$row = $page->grid->createRow();
$row->containerIncluded = true;


/* Portfolio Works */
$row = $page->grid->createRow();
$row->containerIncluded = true;


/* FOOTER */
$row = $page->grid->createRow();