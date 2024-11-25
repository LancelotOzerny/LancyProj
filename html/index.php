<?php
try
{
    include_once dirname($_SERVER['DOCUMENT_ROOT']) . '/Core/bootstrap.php';
}
catch (Throwable $error)
{
    echo '<pre>';
    print_r([
        'file' => $error->getFile(),
        'line' => $error->getLine(),
        'message' => $error->getMessage(),
    ]);
    echo '</pre>';
}