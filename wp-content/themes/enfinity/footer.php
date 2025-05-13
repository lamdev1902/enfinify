<footer id="footer" class="footer">
	<div class="footer__top">
		<div class="container">
			<div class="footer__top-content flex">
				<div class="footer__top-info item-flex">
					<div class="footer__top-logo"><a href="<?php echo home_url(); ?>"><img
								src="<?php echo get_field('logo', 'option') ?>" alt=""></a></div>
					<div class="social mr-bottom-40">
						<?php
						$social = get_field('social', 'option');
						if ($social) {
							foreach ($social as $social) {
								?>
								<a target="_blank" href="<?php echo $social['link']; ?>"><img class="social__white" width="20"
										height="20" src="<?= $social['icon']['url']; ?>"
										alt="<?= $social['icon']['alt']; ?>" /></a>
							<?php }
						} ?>
					</div>
					<div class="footer__top-form">
						<div class="title mr-bottom-20">
							<p class="has-large-font-size">
								<?= get_field('news_title', 'option') ?>
							</p>
						</div>
						<div class="description mr-bottom-20">
							<p class="has-small-font-size">
								<?= get_field('news_des', 'option') ?>
							</p>
						</div>
						<div class="klaviyo-form-TcfuNL mr-bottom-20"></div>
					</div>
				</div>
				<nav class="footer__top-menu item-flex">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu_cat',
						)
					);
					?>
					<div class="disclaimer">
						<p class="has-small-font-size pri-color-3"><?php the_field('disclaimer', 'option'); ?></p>
					</div>
				</nav>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>