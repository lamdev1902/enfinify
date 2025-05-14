<?php
/* Template Name: Career Page */
$pageid = get_the_ID();
get_header();
the_post();

$labels = get_field('enf__contact-label', 'option');
?>
<main id="content" class="default-template career">
	<div class="page-top-white mb-top-black">
		<div class="container">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<div id="breadcrumbs" class="breacrump">', '</div>');
			}
			?>
		</div>
	</div>
	<?php
	if ($labels):
		?>
		<section class="career__hero">
			<div class="container">
				<h1 class="text-center pri-color-3 text-uppercase"><?php the_title(); ?></h1>
				<p class="pri-color-3 text-center"><?= get_field('career_description', 'option'); ?></p>
				<div class="career__hero-list">
					<?php foreach ($labels as $key => $lb): ?>
						<div class="career__hero-job flex">
							<div class="career__hero-department">
								<p><?= $lb['department'] ?></p>
							</div>
							<div class="career__hero-info flex">
								<div class="career__hero-title" data-job="<?= str_replace(' ', '-', $lb['label']) ?>">
									<p class="pri-color-3"><?= $lb['label'] ?></p>
								</div>
								<div class="career__hero-location">
									<p class="pri-color-3"><?= $lb['location'] ?></p>
								</div>
								<div class="career__hero-apply">
									<a href="mailto:info@endomondo.com">Apply</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<div class="container">
			<?php foreach ($labels as $key => $lb): ?>
				<div class="career_job-content single-main" id="<?= str_replace(' ', '-', $lb['label']) ?>" data-id="<?= str_replace(' ', '-', $lb['label']) ?>">
					<p class="has-large-font-size pri-color-3">
						<?= $lb['label'] ?>
					</p>
					<?= $lb['content'] ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</main>
<?php get_footer(); ?>