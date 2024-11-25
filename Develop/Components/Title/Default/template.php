<?php
/** @var array $componentParams */
/** @var array $templateParams */

$title = $componentParams['content'] ?? 'Empty Title';
$level = $componentParams['level'] ?? '1';
?>

<h<?= $level ?> class="page-title"><?= $title ?></h<?= $level ?>>