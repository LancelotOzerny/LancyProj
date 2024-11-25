<?php
/** @param \Core\Modules\System\Libs\Page $this */

use Core\Modules\System\Libs\Page;
use Core\Modules\HtmlCreator\Libs\Main\HtmlCode;
use Core\Modules\HtmlCreator\Libs\Main\Text;

$page = Page::getInstance();

$page->grid->addNewElement(new HtmlCode(<<<HTML
</body>
</html>
HTML));