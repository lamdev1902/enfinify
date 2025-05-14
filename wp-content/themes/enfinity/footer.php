<section id="enfE" class="enf__contact e">
	<div class="container">
		<h2 class="enf__contact-description pri-color-3">
			<?= get_field('enf__contact-title', 'option'); ?>
		</h2>
		<p style="color: #fff"><?= get_field('enf__contact-description', 'option'); ?></p>
		<div class="enf__contact-content flex">
			<div class="contact__info">
				<p class="contact__info-title has-large-font-size">
					Contact Information
				</p>
				<p><?= get_field('enf__contact-info', 'option'); ?></p>
				<address class="ct-info">
					<div class="contact__info-address">
						<p class="contact__info-label">Address</p>
						<p><?= get_field('enf__contact-address', 'option'); ?></p>
					</div>
					<div class="contact__info-email">
						<p class="contact__info-label">Email</p>
						<p><?= get_field('enf__contact-email', 'option'); ?></p>
					</div>
				</address>
				<p class="contact__info-label">Follow us</p>
				<?php $ctsocial = get_field('follow_social', 'option'); ?>
				<?php if ($ctsocial): ?>
					<div class="contact__info-social grid">
						<?php
						foreach ($ctsocial as $follow) {
							?>
							<a href="<?php echo $follow['link']; ?>" target="_blank"><img class="social__grey" width="20"
									height="20" src="<?php echo $follow['icon']['url']; ?>"
									alt="<?php echo $follow['icon']['alt']; ?>" /><?php echo $follow['title']; ?> </a>
							</a>
						<?php } ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="contact-form">
				<?php
				$labels = get_field('enf__contact-label', 'option');
				if ($labels):
					?>
					<p class="label">Role Open</p>
					<div class="enf__contact-form-labels">
						<?php foreach ($labels as $key => $lb): ?>
							<?php if ($key <= 1): ?>
								<a href="<?=home_url().'/ready-to-join-the-ranks/'?>#<?= str_replace(' ', '-', $lb['label']) ?>">
									<p class="enf__contact-form-label <?= $key < 1 ? "enf__contact-form-label--active" : "" ?>">
										<?= $lb['label'] ?>
									</p>
								</a>
							<?php endif; ?>
						<?php endforeach; ?>
						<?php
							if (count($labels) > 2): ?>
								<a href="#">
									<p class="enf__contact-form-label">
										See more
									</p>
								</a>
							<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php echo do_shortcode('[contact-form-7 id="114" title="Contact Form"]'); ?>
			</div>
		</div>
	</div>
</section>
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
	<div class="footer__bottom">
		<div class="container">
			<div class="footer__bottom-item">
				<?php
				$copyright = get_field('footer_bottom', 'option');
				$yearc = date('Y');
				$text = str_replace("%year%", $yearc, $copyright); ?>
				<p class="has-small-font-size pri-color-3"><?= $text; ?></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>