<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="papers-single-main">
    <section class="hero-image">
        <div class="hero-image-wrapper animate matrixZoomOut">
            <?php
            $cover = './assets/img/design/papers-single-hero.png';
            $cover_m = './assets/img/design/papers-single-hero.png';
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
                <div class="header">
                    <h2 class="size-h2 weight-bold animate fadeIn">LUCY, Bangkok performance added to first world tour 'written by FLOWER' on July 14th</h2>
                    <p class="has-small-font-size animate fadeIn">21 Nov 2023</p>
                </div>
                <div class="share">
                    <p class="size-subtitle2 weight-bold animate fadeIn">share this article</p>
                    <div class="social-media animate fadeIn">
                        <a href="#outer"><i class="ic ic-facebook size-icon-lg"></i></a>
                        <a href="#outer"><i class="ic ic-twitter size-icon-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-content entry-content entry-fadeIn">
                <h3>The band LUCY visits Bangkok thanks to strong local love calls.</h3>
                <p></p>
                <p>LUCY (Shin Ye-chan, Choi Sang-yeop, Cho Won-sang, Shin Gwang-il) posted a poster for their first world tour 'LUCY 1st WORLD TOUR written by FLOWER in BANGKOK' on their official SNS on the 18th and announced additional performances in Bangkok on July 14th.
                    Lucy, who is visiting Bangkok for the first time through this world tour, is determined to give fans a gift-like experience not only with a special stage but also with music and powerful performances featuring Lucy's enchanting band play to repay the support of
                    her fans.

                    Lucy successfully completed her first world tour, starting in Seoul last March and stopping in Macau, Taipei, and Tokyo. In particular, communication in the local language further enhanced the atmosphere of the concert hall, while closely interacting with local fans through a stage where hit songs by famous singers from each region were reinterpreted in Lucy's own way.</p>
                <div class="wp-block-image">
                    <img src="./assets/img/design/papers-single-content-1.png" alt="content-image">
                </div>
                <p>Lucy will then hold a tour in North America, starting with Toronto, Canada on the 23rd (local time), then Boston, New York, Chicago, and Los Angeles. Among these, the New York and San Jose performances were sold out early, proving Lucy's global influence.
                    Lucy recently appeared as a headliner at Korea's representative festival, 'Beautiful Mint Life 2024', for two consecutive years. Lucy took first place in the 'Artist Recommendation Event' held on the festival's official SNS account before the lineup was revealed, and was listed as the artist most wanted to see, showing off her qualities as a 'representative of the K-band scene'.</p>
                <h3>
                    <strong>SUSTAINABILITY EFFORTS</strong>
                </h3>
                <p>Billie Eilish will continue her long-standing partnership with environmental nonprofit REVERB on this tour, building on the success of previous efforts, which resulted in over $1 million donated to environmental, greenhouse gas reduction, and climate justice projects, more than 150,000 fan actions, and much more. Sustainability efforts on this tour will include reducing greenhouse gas pollution, decreasing single-use plastic waste, updating concession offerings to promote and encourage plant-based food options with Support+Feed, and supporting climate action.</p>
                <h3>
                    <strong> ECO-VILLAGE</strong>
                </h3>
                <p>The Billie Eilish REVERB Eco-Villages will be set up at 2 locations in the main concourse of every show where fans can take part in the tour’s sustainability efforts, connect with nonprofits, and take meaningful action for people and the planet.</p>
                <h3>
                    <strong>TRANSPORT</strong>
                </h3>
                <p>Fans are encouraged to join the effort to make the HIT ME HARD AND SOFT: THE TOUR more sustainable. Where possible, take public transportation and carpool to and from the shows to help reduce greenhouse gas pollution and encourage more public transportation options. Fans will receive information via email about public transportation options before the show.</p>
                <h3>
                    <strong>VENUES</strong>
                </h3>
                <p>Venue partners are also helping to lessen the environmental footprint of the tour. In addition to efforts to decrease waste through reducing or eliminating single-use plastics and diverting landfill waste with compost and recycling, venues will be offering plant-based food options at all shows.</p>
                <h3>
                    <strong>FAN PARTICIPATION</strong>
                </h3>
                <p>Bring an EMPTY reusable water bottle or donate for a custom RockNRefill Nalgene bottle to fill up at the free water refill stations located at each venue. The RockNRefill bottles and refill stations are located at the Eco-Villages located in the main concourse at all shows. Fight fast fashion by opting for thrifted, upcycled, or borrowed clothes instead of buying new clothing to wear to shows.

                    Billie Eilish’s forthcoming album, HIT ME HARD AND SOFT was written by Billie Eilish and FINNEAS, her brother and long-time collaborator, who also produced the album. HIT ME HARD AND SOFT will be available on all digital platforms, and in a continued effort to minimize waste and combat climate change; across all physical formats in limited variants on the same day, with the same track-listing and using 100% recyclable materials. For more information on all sustainable practices for this album release, please visit HERE.</p>
            </div>
        </article>
    </section>

    <section class="sc two-sides">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold" data-split data-split-animate>LATEST UPDATE</h1>
            </div>
        </div>

        <div class="two-sides-content">
            <div class="left-side">
                <?php
                $box = array(
                    "link" => "./tours-single.php",
                    "title" => "Macklemore announces 2nd & final Perth show plus Melbourne venue upgrade due to phenomenal ticket demand",
                    "date" => "21 Nov 2023",
                    "image" => "./assets/img/design/event-box-image-1.png"
                );
                include($root . "include/element-black-box-large.php")
                ?>
            </div>
            <div class="right-side">
                <?php
                $box = array(
                    "link" => "./tours-single.php",
                    "title" => "Macklemore announces 2nd & final Perth show plus Melbourne venue upgrade due to phenomenal ticket demand",
                    "date" => "21 Nov 2023",
                    "image" => "./assets/img/design/event-box-image-2.png"
                );
                include($root . "include/element-black-box-large.php")
                ?>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>