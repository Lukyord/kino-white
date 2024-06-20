<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <section class="hero">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php $hero_slide_arr = array(
                    array(
                        "bg" => "./assets/img/design/hero-bg-1.mp4",
                        "band-image" => "./assets/img/design/hero-band-1.png",
                        "band-logo" => "./assets/img/design/hero-band-logo-1.png",
                    ),
                    array(
                        "bg" => "./assets/img/design/hero-bg-2.mp4",
                        "band-image" => "./assets/img/design/hero-band-2.png",
                        "band-logo" => "./assets/img/design/hero-band-logo-2.png",
                    ),
                    array(
                        "bg" => "./assets/img/design/hero-bg-3.mp4",
                        "band-image" => "./assets/img/design/hero-band-3.png",
                        "band-logo" => "./assets/img/design/hero-band-logo-3.png",
                    ),
                );
                foreach ($hero_slide_arr as $hero_slide) :
                    include($root . "include/element-hero-slide.php");
                endforeach;
                ?>

            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>