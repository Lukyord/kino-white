<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="special-projects-main">

    <section class="highlight special-projects">
        <div class="highlight-content">
            <div class="highlight-content-wrapper fadeInLeft animate">
                <a class="link-overlay" href="./special-projects-single.php">&nbsp;</a>

                <p class="sale-date size-overline  weight-bold uppercase">Sale 18 May 24</p>
                <h2 class="size-h2 weight-bold">XG 1st WORLD TOUR “The first HOWL” Landing at Bangkok</h2>
                <p class="date size-subtitle1 c-gray">2024/8/4 (SUN)</p>
                <p class="description size-h3">
                    The girl group inspired by the HIPHOP/R&B music genre has 7 members are set to launch their tour in Osaka. Japan on May 18 and 19, after which it will travel to many other locations in Asia including Yokohama, Singapore, Seoul, Taipei, Bangkok, Manila, Kuala Lumpur, and more.</p>
                <div class="separator-gray-light"></div>
                <div class="venue-and-locations uppercase">
                    <div class="venue">
                        <h3 class="size-h3 weight-bold">Venue</h3>
                        <p class="size-subtitle2">UOB Live</p>
                    </div>
                    <div class="locations">
                        <h3 class="size-h3 weight-bold">Other location</h3>
                        <p class="size-subtitle2 c-gray margin-top-3xs">
                            <?php
                            $location = array("Seoul", "Tokyo", "Taipei", "Hong Kong", "Manilla", "Singapore", "Bangkok", "Jakarta");
                            echo implode("/ ", $location);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight-image animate fadeIn">
            <a class="link-overlay" href="./special-projects-single.php">&nbsp;</a>
            <?php
            $cover = './assets/img/design/special-projects-highlight.png';
            $cover_m = './assets/img/design/special-projects-highlight-m.png';
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

    <section class="sc two-sides">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold w-60" data-split data-split-animate>SPECIAL EVENTS</h1>
            </div>
        </div>

        <div class="two-sides-content">
            <div class="left-side">
                <?php
                for ($i = 0; $i < 2; $i++) :
                ?>
                    <?php
                    $box = array(
                        "link" => "./special-projects-single.php",
                        "title" => "Ateez World Tour [The Fellowship : Break The Wall] In Singapore 2023",
                        "date" => "21 Nov 2023",
                        "image" => "./assets/img/design/tour-box-image-1.png"
                    );
                    include($root . "include/element-black-box.php")
                    ?>
                <?php
                endfor;
                ?>
            </div>
            <div class="right-side">
                <?php
                for ($i = 0; $i < 2; $i++) :
                ?>
                    <?php
                    $box = array(
                        "link" => "./special-projects-single.php",
                        "title" => "Ateez World Tour [The Fellowship : Break The Wall] In Singapore 2023",
                        "date" => "21 Nov 2023",
                        "image" => "./assets/img/design/tour-box-image-1.png"
                    );
                    include($root . "include/element-black-box.php")
                    ?>
                <?php
                endfor;
                ?>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>