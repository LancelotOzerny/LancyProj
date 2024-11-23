<?php
/** @var \Core\Modules\System\Libs\Page $page */

$page->setFutureParam('title', 'Сайт портфолио');


/* HEADER */
$row = $page->grid->createRow();
$row->createColumn('Title', ['content' => 'test'])->addClass('col-12');;
$row->addClass('py-5');


/* About me */
$container = $page->grid->createContainer();
$row = $container->createRow();
$row->addClass('py-5');
$row->createColumn('Title', ['content' => 'Title 1'])->addClass('col-3');
$row->createColumn('Title', ['content' => 'Title 2'])->addClass('col-3');;
$row->createColumn('Title', ['content' => 'Title 3'])->addClass('col-3');;
$row->createColumn('Title', ['content' => 'Title 4'])->addClass('col-3');;


/* Portfolio Works */
$container = $page->grid->createContainer();
$row = $container->createRow();
$row->addClass('py-5');

/* FOOTER */
$row = $page->grid->createRow();
$row->addClass('py-5');
$row->createColumn()->addClass('col-3');
$row->createColumn()->addClass('col-3');;
$row->createColumn()->addClass('col-3');;
$row->createColumn()->addClass('col-3');;