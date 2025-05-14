<?php
/* Template Name: Enfinity Page */
$pageid = get_the_ID();
get_header();
the_post();

$app = get_field('intro_app', 'option');
?>
<main id="content" class="enf">
    <section id="enfA" class="enf__hero a">
        <div class="container">
            <div class="enf__hero-content">
                <h1 class="enf__hero-content-title pri-color-3 text-center">
                    <?= get_field('enf__hero-content-title', $pageid) ?></h1>
                <div class="enf__hero-content-description text-center">
                    <?= get_field('enf__hero-content-description', $pageid) ?>
                </div>
            </div>
            <?php
            $brand_list = get_field('feature_on', 'option');
            if ($brand_list) {
                ?>
                <div class="featureon enf__hero-brand">
                    <div class="container">
                        <p class="text-center" style="color: #595959;">Featured On</p>
                        <ul class="featureon__list flex">
                            <?php foreach ($brand_list as $hl) {
                                $logo = $hl['logo'];
                                ?>
                                <li class="featureon__item"><img class="featureon__img featureon__item--enfinity"
                                        src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <section id="enfB" class="enf__about section-flexcenter b">
        <div class="container">
            <h2 class="enf__about-title text-center pri-color-3 "><?= get_field('enf__about-title', $pageid) ?></h2>
            <div class="enf__about-description text-center"><?= get_field('enf__about-description', $pageid) ?></div>
            <?php $ablist = get_field('enf__about-list', $pageid);
            if ($ablist):
                ?>
                <div class="enf__about-list flex">
                    <?php foreach ($ablist as $ab): ?>
                        <div class="enf__about-item">
                            <div class="enf__about-item-label">
                                <h3 class="enf__about-item-title"><?= $ab['enf__about-item-title'] ?></h3>
                                <p class="enf__about-item-sub">
                                    <?= $ab['enf__about-item-sub'] ?>
                                </p>
                            </div>
                            <p class="enf__about-item-description"><?= $ab['enf__about-item-description'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="enf__about-map">
                <div class="enf__about-map-img">
                    <img src="<?= get_template_directory_uri() . '/assets/images/enfinity/map.png' ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="enfC" class="enf__brands c">
        <div class="container">
            <h2 class="enf__brands-title text-center "><?= get_field('enf__brands-title', $pageid) ?></h2>
            <div class="enf__brands-description text-center">
                <?= get_field('enf__brands-description', $pageid) ?>
            </div>
            <?php $brands = get_field('enf__brands-list', $pageid);
            if (!empty($brands)):
                ?>
                <div class="enf__brands-list flex">
                    <?php foreach ($brands as $br): ?>
                        <div class="enf__brands-list-item">
                            <img src="<?= $br['image'] ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php $workouts = get_field('enf__brands-wordkouts', $pageid);
            if (!empty($workouts)):
                ?>
                <div class="enf__brands-wordkouts">
                    <?php foreach ($workouts as $wk): ?>
                        <div class="enf__brands-wordkouts-item flex">
                            <div class="enf__brands-wordkouts-item-img">
                                <img src="<?= $wk['image'] ?>" alt="">
                            </div>
                            <div class="enf__brands-wordkouts-item-content">
                                <div class="enf__brands-wordkouts-item-content-top">
                                    <h3 class="enf__brands-wordkouts-item-content-title pri-color-3">
                                        <?= $wk['enf__brands-wordkouts-item-content-title'] ?>
                                    </h3>
                                    <p class="enf__brands-wordkouts-item-sub pri-color-3">
                                        <?= $wk['enf__brands-wordkouts-item-sub'] ?>
                                    </p>
                                </div>
                                <div class="enf__brands-wordkouts-item-content-center">
                                    <div class="enf__brands-wordkouts-item-content-description">
                                        <?= $wk['enf__brands-wordkouts-item-content-description'] ?>
                                    </div>
                                </div>
                                <div class="enf__brands-wordkouts-item-content-action">
                                    <a href="<?= $wk['enf__brands-wordkouts-item-content-link'] ?>"
                                        class="enf__brands-wordkouts-item-content-link">Discover Now</a>
                                </div>
                                <div class="enf__brands-wordkouts-item-content-bottom flex">
                                    <div class="enf__brands-wordkouts-item-content-bottom-stat">
                                        <p class="enf__brands-wordkouts-item-content-bottom-stat-number pri-color-3">
                                            <?= $wk['enf__brands-wordkouts-item-content-bottom-stat-number'] ?>
                                        </p>
                                        <p class="enf__brands-wordkouts-item-content-bottom-stat-text pri-color-3">
                                            <?= $wk['enf__brands-wordkouts-item-content-bottom-stat-text'] ?>
                                        </p>
                                    </div>
                                    <div class="enf__brands-wordkouts-item-content-bottom-rate">
                                        <div class="enf__brands-wordkouts-item-content-bottom-rate-number">
                                            <input type="hidden" disabled
                                                value="<?= $wk['enf__brands-wordkouts-item-content-bottom-rate-number'] ?>"
                                                class="enf__rate" data-empty="fa-regular fa-star" data-filled="fas fa-star"
                                                data-fractions="1" />
                                        </div>
                                        <p class="enf__brands-wordkouts-item-content-bottom-rate-text pri-color-3">
                                            <?= $wk['enf__brands-wordkouts-item-content-bottom-rate-text'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section id="enfD" class="enf__investments section-flexcenter d">
        <div class="container">
            <h2 class="enf__investments-title  text-center"><?= get_field('enf__investments-title', $pageid); ?></h2>
            <div class="enf__investments-description text-center">
                <?= get_field('enf__investments-description', $pageid); ?>
            </div>
            <?php $invests = get_field('enf__investments-list', $pageid);
            if (!empty($invests)):
                ?>
                <div class="enf__investments-list">
                    <?php foreach ($invests as $key => $in):
                        $key++; ?>
                        <div class="enf__investments-item flex enf__investments-item-<?= $key ?>">
                            <div class="enf__investments-item-img">
                                <img src="<?= $in['image'] ?>" alt="">
                            </div>
                            <div class="enf__investments-item-content">
                                <p class="has-large-font-size enf__investments-item-title"><?= $in['enf__investments-item-title'] ?></p>
                                <p class="enf__investments-item-description"><?= $in['enf__investments-item-description'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <div class="enf__scrollbar flex">
        <div class="enf__scrollbar-item enf__scrollbar-item--active" data-target="enfA">
        </div>
        <div class="enf__scrollbar-item" data-target="enfB">
        </div>
        <div class="enf__scrollbar-item" data-target="enfC">
        </div>
        <div class="enf__scrollbar-item" data-target="enfD">
        </div>
    </div>
</main>
<?php get_footer(); ?>
<script>
    jQuery(function ($) {
        $('.enf__brands-wordkouts').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            arrows: false,
            dots: true
        });

        var ratingValue = $('.enf__rate').val();

        $('.enf__rate').rating({
            maxRating: 5,
            initialRating: ratingValue,
            readonly: true,
            step: 1,
        });
    })
</script>