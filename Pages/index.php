<?php
/** @var \Core\Modules\System\Libs\Page $page */

use Core\Modules\System\Libs\Components\Component;

$page->setFutureParam('title', 'Сайт портфолио');


/* HEADER */
$row = $page->grid->createRow();
$row->createColumn()->addClass('col-12')->addSelector(new Component('Title', ['content' => 'test']));
$row->addClass('py-5');


/* About me */
$container = $page->grid->createContainer();
$row = $container->createRow();
$row->addClass('py-5');
$row->createColumn()->addClass('col-3')->addSelector(new Component('Title', ['content' => 'Title 1']));
$row->createColumn()->addClass('col-3')->addSelector(new Component('Title', ['content' => 'Title 2']));
$row->createColumn()->addClass('col-3')->addSelector(new Component('Title', ['content' => 'Title 3']));
$row->createColumn()->addClass('col-3')->addSelector(new Component('Title', ['content' => 'Title 4']));


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