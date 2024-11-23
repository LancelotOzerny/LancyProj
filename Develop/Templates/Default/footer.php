<?php
/** @param \Core\Modules\System\Libs\Page $this */

use Core\Modules\System\Libs\Page;
use Core\Modules\System\Libs\Selectors\HtmlCode;

$page = Page::getInstance();

$page->grid->addSelector(new HtmlCode(<<<HTML
</body>
</html>
HTML));
