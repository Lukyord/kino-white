<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="business-main">

    <section class="business-hero">
        <div class="business-hero-container">
            <h1 class="c-white size-h1 uppercase weight-bold rellax" data-split data-split-animate>KINO White </br> An enchanted performance creator</h1>
            <div class="business-hero-image animate fadeIn rellax">
                <img src="./assets/img/design/business-hero-image.png" alt="business-hero-image">
            </div>
            <div class="business-hero-text animate fadeIn">
                <p class="c-white size-h3 rellax">With the aim of delivering unsurpassed entertainment experience to our audience. Kino White incorporates international and domestic touring, booking agencies, artist and talent management, record labels, music publishing, merchandising, creative and marketing services, event production, film and more. We are beyond passionate about what we do.</p>
            </div>
            <?php include($root . "include/element-globe-vector.php") ?>
        </div>
    </section>

    <section class="business-content c-white">
        <div class="manage">
            <h1 class="size-h1 uppercase weight-bold rellax" data-split data-split-animate>Manage <br /> for Client</h1>
            <div class="manage-text">
                <div class="point rellax">
                    <h3 class="size-h3 animate fadeIn">Artist Representation</h3>
                    <p class="animate fadeIn">We take charge of managing budget, artiste booking, coordinate with promoters, managing schedule, managing crew, production, searching and managing sponsor, marketing and financial control of concerts and tour for clients and partners across the regions.</p>
                </div>
                <div class="separator-gray-dark hidden-device-sm"></div>
                <div class="point rellax">
                    <h3 class="size-h3 animate fadeIn">Concert & Tour Management</h3>
                    <p class="animate fadeIn">We take charge of managing budget, artiste booking, coordinate with promoters, managing schedule, managing crew, production, searching and managing sponsor, marketing and financial control of concerts and tour for clients and partners across the regions.</p>
                </div>
            </div>
        </div>
        <div class="promote">
            <h1 class="size-h1 uppercase weight-bold padding-bottom-lg" data-split data-split-animate>Promote <br /> our Show</h1>
            <div class="promote-show-items">
                <div class="swiper auto insufficient">
                    <div class="swiper-wrapper">
                        <?php
                        $show_items = array(
                            array(
                                "title" => "Promote Show",
                                "description" => "We take charge of the overall planning and managing of concerts and events which includes working with artiste managers to assess venues and coordinate artistes' availability, handing ticketing matters, merchandising, marketing and promotion of concerts and events.",
                                "image" => "./assets/img/design/promote-show-1.png"
                            ),
                            array(
                                "title" => "Merchandising",
                                "description" => "We take charge of the overall planning and managing of concerts and events which includes working with artiste managers to assess venues and coordinate artistes' availability, handing ticketing matters, merchandising, marketing and promotion of concerts and events. We take charge of the overall planning and managing of concerts and events which includes working with artiste managers to assess venues and coordinate artistes' availability, handing ticketing matters, merchandising, marketing and promotion of concerts and events.",
                                "image" => "./assets/img/design/promote-show-2.png"
                            ),
                            array(
                                "title" => "Ticketing",
                                "description" => "We take charge of the overall planning and managing of concerts and events which includes working with artiste managers to assess venues and coordinate artistes' availability, handing ticketing matters, merchandising, marketing and promotion of concerts and events.",
                                "image" => "./assets/img/design/promote-show-3.png"
                            ),
                            array(
                                "title" => "Creative & Etc.",
                                "description" => "We take charge of the overall planning and managing of concerts and events which includes working with artiste managers to assess venues and coordinate artistes' availability, handing ticketing matters, merchandising, marketing and promotion of concerts and events.",
                                "image" => ""
                            )
                        );

                        foreach ($show_items as $index => $show_item) :
                            include($root . "include/element-promote-show-item.php");
                        endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="join-us">
        <div class="join-us-image animate fadeIn">
            <a class="link-overlay" href="./careers.php">&nbsp;</a>
            <?php
            $cover = './assets/img/design/business-join-us-image.png';
            $cover_m = './assets/img/design/business-join-us-image.png';
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
        <div class="join-us-content">
            <div class="join-us-content-wrapper fadeInRight animate c-white bg-black">
                <a class="link-overlay" href="./careers.php">&nbsp;</a>

                <h1 class="size-h1 weight-bold uppercase">
                    Join us <br />
                    Bring Events
                    to Life with
                    Your Talent!
                </h1>
                <p class="size-h3">Join a team that values creativity, detail, and excellent communication, providing continuous training for professional growth. Be part of a company that creates memorable experiences and brings events to life.</p>
            </div>
        </div>

    </section>
</main>

<?php include($root . "footer.php"); ?>