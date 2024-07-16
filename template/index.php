<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <section class="hero">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php $hero_slide_arr = array(
                    array(
                        "bg" => "./assets/img/design/hero-bg-3.mp4",
                        "band-image" => "./assets/img/design/hero-band-3.png",
                        "band-logo" => "./assets/img/design/hero-band-logo-3.png",
                    ),
                    array(
                        "bg" => "./assets/img/design/hero-bg-2.mp4",
                        "band-image" => "./assets/img/design/hero-band-2.png",
                        "band-logo" => "./assets/img/design/hero-band-logo-2.png",
                    ),
                    array(
                        "bg" => "./assets/img/design/hero-bg-1.mp4",
                        "band-image" => "./assets/img/design/hero-band-1.png",
                        "band-logo" => "./assets/img/design/hero-band-logo-1.png",
                    ),
                );
                foreach ($hero_slide_arr as $hero_slide) :
                    include($root . "include/element-hero-slide.php");
                endforeach;
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="sc index-tours tab-container">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold animate" data-split data-split-animate>TOURS</h1>
            </div>
            <div class="tabs animate fadeIn">
                <div class="swiper auto">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a class="tab-link active" href="#current-tours">CURRENT TOURS</a></div>
                        <div class="swiper-slide"> <a class="tab-link" href="#upcoming-tours">UPCOMING TOURS</a></div>
                        <div class="swiper-slide"> <a class="tab-link" href="#past-tours">PAST TOURS</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="sc-tab-bound"></div> -->
        <div class="sc-tab-content animate fadeIn">
            <div class="tab-content active" id="current-tours">
                <div class="tours-grid">
                    <?php
                    $tourDetails = array(
                        "title" => "P1ONEER",
                        "description" => "P1Harmony live tour [P1ustage H : P1oneer",
                        "tour" => "2024 ASIA TOUR",
                        "location" => array("Seoul", "Tokyo", "Taipei", "Hong Kong", "Manilla", "Singapore", "Bangkok", "Jakarta"),
                        "sale-date" => "18 May 2024",
                        "card-image" => "",
                        "status" => "on-sale"
                    );

                    $tours_arr = array();

                    for ($i = 0; $i < 8; $i++) {
                        $tourDetails['card-image'] = "./assets/img/design/tour-card-" . (9 + $i) . ".png";
                        $tours_arr[] = $tourDetails;
                    }

                    foreach ($tours_arr as $tour) :
                        include($root . "include/element-tour-card.php");
                    endforeach ?>
                </div>
            </div>

            <div class="tab-content" id="upcoming-tours">
                <p class="margin-bottom-xl">upcoming tours</p>
            </div>

            <div class="tab-content" id="past-tours">
                <p class="margin-bottom-xl">past tours</p>
            </div>
        </div>

        <div class="index-tours-btn">
            <a href="<?php echo $root; ?>tours.php" class="button button-primary animate fadeIn">View All Update</a>
        </div>

    </section>


    <section class="sc two-sides">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold w-60" data-split data-split-animate>LATEST UPDATE</h1>
            </div>
            <a href="<?php echo $root; ?>tours.php" class="button button-secondary animate fadeIn hidden-device-sm">View All Update</a>
        </div>

        <div class="two-sides-content gap">
            <?php
            $box = array(
                "link" => "./tours-single.php",
                "title" => "Macklemore announces 2nd & final Perth show plus Melbourne venue upgrade due to phenomenal ticket demand",
                "date" => "21 Nov 2023",
                "image" => "./assets/img/design/large-tour-box-image-1.png",
                "extra_class" => "large"
            );
            include($root . "include/element-black-box.php")
            ?>
            <?php
            for ($i = 0; $i < 3; $i++) :
            ?>
                <?php
                $box = array(
                    "link" => "./tours-single.php",
                    "title" => "Ateez World Tour [The Fellowship : Break The Wall] In Singapore 2023",
                    "date" => "21 Nov 2023",
                    "image" => "./assets/img/design/tour-box-image-1.png",
                    "extra_class" => ""
                );
                include($root . "include/element-black-box.php")
                ?>
            <?php
            endfor;
            ?>
        </div>
        <div class=" animate fadeIn hidden-device-md margin-top-md">
            <a href="<?php echo $root; ?>tours.php" class="button button-secondary">View All Update</a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>