<?php
namespace Core;

class Loader
{
    public static function ClassAutoload(string $className)
    {
        $filePath = ROOT_DIR . "/$className.php";
        $filePath = str_replace('\\', '/', $filePath);

        if (file_exists($filePath))
        {
            include_once $filePath;
        }
        else
        {
            echo "<p>Class <b>'$className'</b> is not exists!</p>";
        }
    }
}