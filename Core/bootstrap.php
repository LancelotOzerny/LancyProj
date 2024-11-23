<?php

define('ROOT_DIR', dirname($_SERVER['DOCUMENT_ROOT']));

require ROOT_DIR . '/Core/Loader.php';
spl_autoload_register('Core\Loader::ClassAutoload');

$pageParams = $_SERVER['QUERY_STRING'];
$pagePath = $_SERVER['REQUEST_URI'];

if (str_ends_with($pagePath, '/'))
{
    $pagePath .= 'index.php';
}

/* ════════ Page Include ════════ */
if (file_exists($pagePath = ROOT_DIR . '/Pages' . $pagePath))
{
    buildPage($pagePath);
}
else if (file_exists($pagePath = ROOT_DIR . '/Pages/404.php'))
{
    buildPage($pagePath);
}
else
{
    echo '<p>Page 404</p>';
}



//  ═════════════════════════
//  FUNCTIONS
//  ═════════════════════════
function buildPage(string $pagePath)
{
    $page = \Core\Modules\System\Libs\Page::getInstance();

    $page->includeHeader();
    include $pagePath;
    $page->includeFooter();

    $page->build();
}
