<?php
/** @var array $componentParams */
/** @var array $templateParams */

$items = $templateParams['items'] ?? [];
?>

<div class="navigation">
	<div class="row h-navbar py-2" style="gap: 10px;">
        <?php foreach ($items as $link): ?>
			<div class="navbar-item <?= $link['active'] ? 'active' : '' ?>">
				<a class="navbar-link px-2 py-1" href="<?= $link['href'] ?>"><?= $link['name'] ?></a>
			</div>
        <?php endforeach; ?>
	</div>
</div>

<style>
	.navigation
	{
		display: flex;
		justify-content: flex-end;
	}

	.h-navbar
	{
		display: flex;
	}

	.h-navbar .navbar-link
	{
		color: #555555;
		transition: .2s;
		border-radius: 2px;
		text-decoration: none;
	}

	.h-navbar .navbar-item.active > .navbar-link,
	.h-navbar .navbar-item:hover > .navbar-link
	{
		color: #fff;
		background-color : #222;
	}
</style>