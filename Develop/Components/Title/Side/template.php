<?php
/** @var array $componentParams */
/** @var array $templateParams */

$isRight = $componentParams['side'] === 'right';

?>

<div class="title-wrapper py-3">
	<h2 class="py-2 p<?= $isRight ? 'r' : 'l' ?>-2 p<?= $isRight ? 'l' : 'r' ?>-4"
		style="background-color: #222; color: #fff; display: inline-block; position: absolute; <?= $isRight ? 'right' : 'left' ?>: 0">
		<?= $componentParams['content'] ?? '' ?>
	</h2>
</div>