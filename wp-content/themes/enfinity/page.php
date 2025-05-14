<?php 
$pageid = get_the_ID();
get_header();
the_post(); 
?>
<main id="content" class="default-template">
	<div class="page-top-white mb-top-black">
		<div class="container">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<div id="breadcrumbs" class="breacrump">', '</div>');
			}
			?>
		</div>
	</div>
	<div class="container">
		<article class="pd-main">
			<h1 class="text-center pri-color-3 text-uppercase"><?php the_title(); ?></h1>
			<div class="page-custom">
				<?php the_content(); ?>
			</div>
		</article>
	</div>
</main>
<?php get_footer(); ?>