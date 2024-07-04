<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="live-agency-main">
    <section class="sticky-hero">
        <div class="hero-content">
            <picture>
                <source media="(min-width:992px)" srcset="./assets/img/design/live-agency-hero-bg.png">
                <source media="(min-width:0px)" srcset="./assets/img/design/live-agency-hero-bg-m.png">
                <img src="./assets/img/design/./assets/img/design/live-agency-hero-bg.png" alt="hero bg-image">
            </picture>
            <div class="hero-content-text">
                <h1 class="size-h1 weight-bold uppercase animate fadeIn">Live agency</h1>
                <p class="size-h3 animate fadeIn">Live agency service offers professional, on-site representatives to ensure seamless execution of events. These agents provide real-time support, handle inquiries, and manage logistics, ensuring that every aspect of the event runs smoothly. With their expertise and personalized approach, Kino White’s live agents enhance the attendee experience, allowing clients to focus on the event's success without worrying about the details.</p>
            </div>
        </div>
    </section>

    <section class="live-agency-grid">
        <?php
        for ($i = 0; $i < 7; $i++) {
            $live_agency = array(
                "image" => "./assets/img/design/live-agency-" . ($i + 1) . ".png",
                "name" => "Yerin Baek",
                "territory" => "Worldwide",
                "service" => array("Touring", "Brand Partnerships", "Fairs & Festivals", "Corporate & Special Events"),
                "tag" => "exclusive booking agent",
            )
        ?>
            <div class="live-agency-card">
                <a href="#live-card-popup-<?php echo ($i + 1) ?>" class="link-overlay open-popup-modal hidden-device-md"></a>
                <?php include($root . 'include/element-live-agency-content.php') ?>
            </div>
            <div id="live-card-popup-<?php echo ($i + 1) ?>" class="live-agency-popup mfp-hide">
                <?php include($root . 'include/element-live-agency-content.php') ?>
            </div>
        <?php } ?>
    </section>
</main>

<?php include($root . "footer.php"); ?>