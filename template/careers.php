<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="careers-main">
    <section class="careers-hero sticky-hero not-sticky">
        <div class="hero-content">
            <picture>
                <source media="(min-width:992px)" srcset="./assets/img/design/careers-hero-bg.png">
                <source media="(min-width:0px)" srcset="./assets/img/design/careers-hero-bg-m.png">
                <img src="./assets/img/design/./assets/img/design/careers-hero-bg.png" alt="hero bg-image">
            </picture>
            <div class="hero-content-text c-white">
                <h1 class="size-h1 weight-bold uppercase">
                    Join us <br />
                    Bring Events to Life with Your Talent!
                </h1>
                <p class="size-h3">Join a team that values creativity, detail, and excellent communication, providing continuous training for professional growth. Be part of a company that creates memorable experiences and brings events to life.</p>
            </div>
        </div>
    </section>

    <section class="careers-filler">
        <div class="careers-filler-image">
            <img src="./assets/img/design/careers-filler.png" alt="">
        </div>
        <p class="filler-content size-h3 uppercase weight-bold c-white">WE WOULD LOVE TO HEAR FROM YOU. LET'S WORK — TOGETHER.</p>
    </section>

    <section class="careers-gallery">
        <div class="careers-highlight-slides">
            <div class="swiper parent">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                    ?>
                        <div class="swiper-slide">
                            <div class="careers-highlight-slide">

                                <div class="parallax-gallery">
                                    <div class="swiper parallax">
                                        <div class="swiper-wrapper">
                                            <?php
                                            for ($j = 1; $j <= 4; $j++) {
                                            ?>
                                                <div class="swiper-slide">
                                                    <div class="parallax-image">
                                                        <img src="./assets/img/design/careers-gallery-<?php echo $j ?>.png" alt="" data-swiper-parallax-x="5%">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="careers-highlight bg-black c-white">
                                    <div class="header uppercase">
                                        <h2 class="size-h2 weight-bold padding-bottom-xs">Project Manager</h2>
                                        <div class="type size-overline">Full time</div>
                                    </div>
                                    <div class="description">
                                        <p class="size-h3">We seeks a Project Manager with proven project management experience and strong organizational skills. The ideal candidate excels in multitasking, leadership, and communication, and is proficient in project management software. </p>
                                    </div>
                                    <div class="info uppercase size-subtitle2">
                                        <div class="info-item">
                                            <h3 class="weight-bold">Category</h3>
                                            <p class="c-gray">Operation</p>
                                        </div>
                                        <div class="info-item">
                                            <h3 class="weight-bold">Education</h3>
                                            <p class="c-gray">University Degree or above</p>
                                        </div>
                                        <div class="info-item">
                                            <h3 class="weight-bold">Location</h3>
                                            <p class="c-gray">Seoul, Rep. of Korea</p>
                                        </div>
                                        <div class="info-item">
                                            <h3 class="weight-bold">Position</h3>
                                            <p class="c-gray"><?php echo $i ?></p>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <a href="<?php echo $root; ?>careers-single.php" class="button button-secondary">View Detail</a>
                                        <div class="arrow-buttons">
                                            <div class="arrow arrow-left swiper-parallax-previous swiper-parent-button-prev">
                                                <i class="ic ic-arrow-left c-black"></i>
                                            </div>
                                            <div class="arrow arrow-right swiper-parallax-next swiper-parent-button-next">
                                                <i class="ic ic-arrow-right c-black"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>

    <section class="sc">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold animate" data-split data-split-animate>AVAILABLE POSITIONS</h1>
            </div>
        </div>
        <div class="available-positions">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                include($root . "include/element-careers-postion.php");
            }
            ?>
        </div>
        <div class="load-more-button animate fadeIn">
            <a href="javascript:;" class="button button-primary">Load More</a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>