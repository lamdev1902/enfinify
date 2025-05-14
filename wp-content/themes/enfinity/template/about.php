<?php
/* Template Name: About*/
$pageid = get_the_ID();
get_header();
the_post();
?>
<main id="content">
	<div class="page-top-white mb-top-black">
		<div class="container">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<div id="breadcrumbs" class="breacrump">', '</div>');
			}
			?>
		</div>
	</div>
	<?php $listContent = get_field('list_content', $pageid); ?>
	<?php if ($listContent): ?>
		<section class="about__hero">
			<div class="container">
				<div class="about__hero-list">
					<div class="about__hero-top flex">
						<div class="about__hero-item">
							<h2 class="pri-color-3 about__hero-item-title"><?= $listContent[0]['title'] ?></h2>
							<p class="pri-color-3"><?= $listContent[0]['description'] ?></p>
						</div>
						<div class="about__hero-item">
							<img src="<?= $listContent[0]['image'] ?>" alt="About Page Hero Section">
						</div>
					</div>
					<div class="about__hero-bottom flex">
						<?php foreach ($listContent as $key => $val): ?>
							<?php if ($key > 0): ?>
								<div class="about__hero-item">
									<p class="pri-color-3 about__hero-item-title has-large-font-size"><?= $val['title'] ?></p>
									<p class="pri-color-3"><?= $val['description'] ?></p>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php
	$abTitle = get_field('about__brand-title', $pageid);
	$abDescription = get_field('about__brand-description', $pageid);
	$abAction = get_field('about__brand-action', $pageid);
	$abImage = get_field('about__brand-image', $pageid);
	?>
	<section class="about__brand">
		<div class="container">
			<?php if ($abTitle): ?>
				<h2><?= $abTitle ?></h2>
			<?php endif; ?>
			<?php if ($abDescription): ?>
				<p><?= $abDescription ?></p>
			<?php endif; ?>
			<?php if ($abAction): ?>
				<a class="about__brand-action" href="<?= $abAction[0]['link'] ?>"><?= $abAction[0]['text'] ?></a>
			<?php endif; ?>
			<?php if ($abImage): ?>
				<div class="about__brand-list flex">
					<?php foreach ($abImage as $img): ?>
						<div class="about__brand-image">
							<img class="" src="<?= $img['image'] ?>" alt="">
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>