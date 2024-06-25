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

    <section class="sc index-tours">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold animate" data-split data-split-animate>TOURS</h1>
            </div>
            <div class="tabs">
                <div class="swiper auto insufficient">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a class="active" href="#current-tours">CURRENT TOURS</a></div>
                        <div class="swiper-slide"> <a class="" href="#upcoming-tours">UPCOMING TOURS</a></div>
                        <div class="swiper-slide"> <a class="" href="#past-tours">PAST TOURS</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tours-grid">
            <?php
            $tourDetails = array(
                "title" => "P1ONEER",
                "description" => "P1Harmony live tour [P1ustage H : P1oneer",
                "tour" => "2024 ASIA TOUR",
                "location" => array("Seoul", "Tokyo", "Taipei", "Hong Kong", "Manilla", "Singapore", "Bangkok", "Jakarta"),
                "sale-date" => "18 May 2024",
                "card-image" => ""
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
        <div class="index-tours-btn">
            <a href="<?php echo $root; ?>tours.php" class="button button-primary animate fadeIn">View All Update</a>
        </div>
    </section>

    <section class="sc latest-update">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold" data-split data-split-animate>LATEST UPDATE</h1>
            </div>
            <a href="#view-all-update" class="button button-secondary animate fadeIn hidden-device-sm">View All Update</a>
        </div>

        <div class="latest-update-content">
            <div class="left-side">
                <div class="tour-box large">
                    <div class="title-and-date">
                        <h3 class="size-h3">Macklemore announces 2nd & final Perth show plus Melbourne venue upgrade due to phenomenal ticket demand</h3>
                        <p class="size-subtitle2 uppercase">21 Nov 2023</p>
                    </div>
                    <div class="image">
                        <img src="./assets/img/design/large-tour-box-image-1.png" alt="tour-box-image">
                    </div>
                </div>
            </div>
            <div class="separator-gray-dark"></div>
            <div class="right-side">
                <?php
                for ($i = 0; $i < 3; $i++) :
                ?>
                    <div class="tour-box">
                        <div class="title-and-date">
                            <h3 class="size-h3">Ateez World Tour [The Fellowship : Break The Wall]
                                In Singapore 2023</h3>
                            <p class="size-subtitle2 uppercase">21 Nov 2023</p>
                        </div>
                        <div class="image">
                            <img src="./assets/img/design/tour-box-image-1.png" alt="tour-box-image">
                        </div>
                    </div>
                <?php
                endfor;
                ?>
            </div>
            <a href="#view-all-update" class="button button-secondary animate fadeIn hidden-device-md">View All Update</a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>