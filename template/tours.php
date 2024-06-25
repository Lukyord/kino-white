<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="tours-main">

    <section class="highlight">
        <div class="highlight-content">
            <div class="highlight-content-wrapper fadeInLeft animate">
                <a class="link-overlay" href="./tours-single.php">&nbsp;</a>

                <p class="sale-date size-overline  weight-bold uppercase">Sale 18 May 24</p>
                <h2 class="size-h2 weight-bold">XG 1st WORLD TOUR “The first HOWL” Landing at Bangkok</h2>
                <p class="date size-subtitle1 c-gray">2024/8/4 (SUN)</p>
                <p class="description size-h3">
                    The girl group inspired by the HIPHOP/R&B music genre has 7 members are set to launch their tour in Osaka. Japan on May 18 and 19, after which it will travel to many other locations in Asia including Yokohama, Singapore, Seoul, Taipei, Bangkok, Manila, Kuala Lumpur, and more.</p>
                <div class="separator-gray-light"></div>
                <div class="venue-and-locations uppercase">
                    <div class="venue">
                        <h3 class="size-h3 weight-bold">Venue</h3>
                        <p>UOB Live</p>
                    </div>
                    <div class="locations">
                        <h3 class="size-h3 weight-bold">Other location</h3>
                        <p class="size-subtitles2 c-gray margin-top-3xs">
                            <?php
                            $location = array("Seoul", "Tokyo", "Taipei", "Hong Kong", "Manilla", "Singapore", "Bangkok", "Jakarta");
                            echo implode("/ ", $location);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight-image">
            <a class="link-overlay" href="./tours-single.php">&nbsp;</a>
            <?php
            $cover = './assets/img/design/tours-highlight.png';
            $cover_m = './assets/img/design/tours-highlight-m.png';
            if (preg_match("/\.(mp4)$/", $cover)) { ?>
                <figure class="object">
                    <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                </figure>
            <?php } else { ?>
                <picture class="object">
                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                    <img src="<?php echo $cover; ?>">
                </picture>
            <?php } ?>
        </div>

    </section>

    <section class="sc bg-white">
        <div class="filter-dropdowns uppercase">
            <div class="filter-ctrl ">
                <a href="javascript:;" class="ctrl size-subtitle1 padding-bottom-sm">filter</a>
            </div>

            <div class="filter-popup">
                <div class="close-filter-popup">
                    <span class="ic ic-close-bold size-icon-xs"></span>
                </div>

                <?php
                $filter_options_arr = array(
                    "status tours" => array("upcoming tours", "current tours", "past tours"),
                    "year" => array("2024", "2023", "2022", "2021", "2020", "2019", "2018", "2017", "2016", "2015"),
                    "location" => array("thailand", "japan", "hong kong", "indonesia", "Philippines", "Singapore", "South Korea", "Taiwan", "Vietnam"),
                );

                foreach ($filter_options_arr as $filter_name => $filter_options) :
                    include($root . "include/element-filter-dropdown.php");
                endforeach; ?>

            </div>

            <?php
            $filter_options_arr = array("sort by" => array("popular", "new arrivals", "Almost gone", "a-z", "z-a"));
            foreach ($filter_options_arr as $filter_name => $filter_options) :
                include($root . "include/element-filter-dropdown.php");
            endforeach;
            ?>
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
            <a href="javascript;:" class="button button-primary animate fadeIn">Load More</a>
        </div>

    </section>
</main>

<?php include($root . "footer.php"); ?>