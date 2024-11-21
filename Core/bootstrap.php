<?php

define('ROOT_DIR', dirname($_SERVER['DOCUMENT_ROOT']));

require ROOT_DIR . '/Core/Loader.php';
spl_autoload_register('Core\Loader::ClassAutoload');

$pageParams = $_SERVER['QUERY_STRING'];
$pagePath = $_SERVER['SCRIPT_NAME'];

if (str_ends_with($pagePath, '/'))
{
    $pagePath .= 'index.php';
}

if (file_exists($pagePath = ROOT_DIR . "/Pages/$pagePath"))
{
    $page = \Core\Modules\System\Libs\Page::getInstance();
    include $pagePath;
    ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= $page->getParam('title') ?></title>
    </head>
    <body>

    <?php
    $page->build();
    ?>
    </body>
    </html>
    <?php
}
else
{
    echo '<p>Page 404</p>';
}
