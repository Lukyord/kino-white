<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="service-main">
    <section class="sticky-hero">
        <div class="hero-content c-white">
            <picture>
                <source media="(min-width:992px)" srcset="./assets/img/design/service-hero-bg.png">
                <source media="(min-width:0px)" srcset="./assets/img/design/service-hero-bg-m.png">
                <img src="./assets/img/design/./assets/img/design/service-hero-bg.png" alt="hero bg-image">
            </picture>
            <div class="hero-content-text">
                <h1 class="size-h1 weight-bold uppercase">
                    Experience <br />
                    with Kino White's <br />
                    Services
                </h1>
                <p class="size-h3">We take charge of managing budget, artiste booking, coordinate with promoters, managing schedule, managing crew, production, searching and managing sponsor, marketing and financial control of concerts and tour for clients and partners across the regions.</p>
            </div>
        </div>
    </section>

    <section class="service-grid">
        <?php
        $service_header = array("Concert Tour Management", "Artist Booking", "Endorsements & Commercials", "Artist Management & Presentation", "Content & Creative", "Photo & Video Production", "Merchandising", "Exhibition");
        $loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

        $service_arr = array();

        foreach ($service_header as $header) {
            $description_length = rand(200, strlen($loremIpsum));
            $service_arr[] = array(
                "header" => $header,
                "description" => substr($loremIpsum, 0, $description_length)
            );
        }

        foreach ($service_arr as $service) :
        ?>
            <div class="service">
                <h3 class="size-h3"><?php echo $service["header"] ?></h3>
                <p><?php echo $service["description"] ?></p>
            </div>
        <?php endforeach ?>
    </section>
</main>

<?php include($root . "footer.php"); ?>