<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="special-projects-single-main">
    <section class="hero-image">
        <div class="hero-image-wrapper animate matrixZoomOut">
            <?php
            $cover = './assets/img/design/special-projects-single-hero.png';
            $cover_m = './assets/img/design/special-projects-single-hero.png';
            if (preg_match("/\.(mp4)$/", $cover)) { ?>
                <figure class="object">
                    <video class="hero-image-content" playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                </figure>
            <?php } else { ?>
                <picture class="object">
                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                    <img class="hero-image-content" src="<?php echo $cover; ?>">
                </picture>
            <?php } ?>
        </div>
    </section>

    <section class="sc no-horizontal-padding">
        <article class="white-gallery-content">
            <div class="article-info uppercase">
                <div class="article-info-wrapper">
                    <div class="header">
                        <h2 class="size-h2 weight-bold animate fadeIn">BAEK YERIN-SINGLE ALBUM “PISCE:S” PRESS CONFERENCES</h2>
                        <p class="has-small-font-size animate fadeIn">21 Nov 2023</p>
                    </div>
                    <div class="share">
                        <p class="size-subtitle2 weight-bold animate fadeIn">share this article</p>
                        <div class="social-media animate fadeIn">
                            <a href="javascript:;" onclick="fbShare()"><i class="ic ic-facebook size-icon-lg"></i></a>
                            <a href="javascript:;" onclick="tweetShare()"><i class="ic ic-twitter size-icon-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article-content entry-content entry-fadeIn">
                <h3>The band LUCY visits Bangkok thanks to strong local love calls.</h3>
                <div class="wp-block-image">
                    <img src="./assets/img/design/special-event-content-1.png" alt="content-image">
                </div>
                <div class="wp-block-image">
                    <img src="./assets/img/design/special-event-content-2.png" alt="content-image">
                </div>
                <div class="wp-block-image">
                    <img src="./assets/img/design/special-event-content-3.png" alt="content-image">
                </div>
                <h3><strong>SPECIAL EVENTS</strong></h3>
                <p>Billie Eilish will continue her long-standing partnership with environmental nonprofit REVERB on this tour, building on the success of previous efforts, which resulted in over $1 million donated to environmental, greenhouse gas reduction, and climate justice projects, more than 150,000 fan actions, and much more. Sustainability efforts on this tour will include reducing greenhouse gas pollution, decreasing single-use plastic waste, updating concession offerings to promote and encourage plant-based food options with Support+Feed, and supporting climate action.</p>
            </div>
        </article>
    </section>

    <section class="special-projects-gallery">
        <div class="swiper-gallery animate fadeIn">
            <div class="swiper auto insufficient loop centered centered-m clicked grab-m">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 0; $i < 3; $i++) { ?>
                        <div class="swiper-slide">
                            <div class="gallery-image">
                                <img src="./assets/img/design/swiper-gallery-<?php echo $i + 1 ?>.png" alt="">
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>

    <section class="sc two-sides">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold" data-split data-split-animate>MORE EVENTS</h1>
            </div>
        </div>

        <div class="two-sides-content">
            <div class="left-side">
                <?php
                $box = array(
                    "link" => "./tours-single.php",
                    "title" => "Macklemore announces 2nd & final Perth show plus Melbourne venue upgrade due to phenomenal ticket demand",
                    "date" => "21 Nov 2023",
                    "image" => "./assets/img/design/event-box-image-1.png",
                    "extra_class" => "large"

                );
                include($root . "include/element-black-box.php")
                ?>
            </div>
            <div class="right-side">
                <?php
                $box = array(
                    "link" => "./tours-single.php",
                    "title" => "Macklemore announces 2nd & final Perth show plus Melbourne venue upgrade due to phenomenal ticket demand",
                    "date" => "21 Nov 2023",
                    "image" => "./assets/img/design/event-box-image-2.png",
                    "extra_class" => "large"
                );
                include($root . "include/element-black-box.php")
                ?>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>