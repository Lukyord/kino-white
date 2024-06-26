<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="tours-single-main">
    <div class="screen-overlay"></div>
    <div class="gradient-bg"></div>

    <section class="tours-single-hero">
        <div class="tours-bg">
            <?php
            $cover = './assets/img/design/tours-single.png';
            $cover_m = './assets/img/design/tours-single-m.png';
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
        <div class="tours-short-info">
            <div class="tours-short-info-wrapper">
                <div class="header">
                    <div class="title uppercase">
                        <div class="sale-date">Sale 18 May 24</div>
                        <h2 class="size-h2 weight-bold">XG 1st WORLD TOUR “The first HOWL”</h2>
                    </div>
                    <div class="subtitle-info size-subtitle2 uppercase">
                        <div>
                            <h3 class="weight-bold">Date</h3>
                            <p class="c-gray">2024/8/4 (SUN)</p>
                        </div>
                        <div>
                            <h3 class="weight-bold">location</h3>
                            <p class="c-gray">
                                <?php
                                $location = array("Seoul", "Tokyo", "Taipei", "Hong Kong", "Manilla", "Singapore", "Bangkok", "Jakarta");
                                echo implode("/ ", $location);
                                ?>
                            </p>
                        </div>
                        <div>
                            <h3 class="weight-bold">Social</h3>
                            <div class="socials">
                                <a href="#" class="ic ic-facebook size-icon-lg"></a>
                                <a href="#" class="ic ic-instagram size-icon-lg"></a>
                                <a href="#" class="ic ic-twitter size-icon-lg"></a>
                                <a href="#" class="ic ic-youtube size-icon-lg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator-gray-light"></div>
                <div class="description">
                    The girl group inspired by the HIPHOP/R&B music genre has 7 members are set to launch their tour in Osaka. Japan on May 18 and 19, after which it will travel to many other locations in Asia including Yokohama, Singapore, Seoul, Taipei, Bangkok, Manila, Kuala Lumpur, and more.
                </div>
                <div class="read-more-toggle uppercase">
                    <a href="javascript:;" data-text-read-more="Read more" data-text-show-less="Show less">Read More</a>
                </div>
            </div>
        </div>

    </section>

    <section class="sc tours-info">
        <div class="locations-dropdown hidden-device-md">
            <a href="javascript:;" class="locations-dropdown-trigger">
                <p class="weight-bold uppercase size-h3"> Choose Location</p>
                <span class="ic ic-chevron-down c-gray"></span>
            </a>
        </div>
        <div class="locations" data-lenis-prevent>
            <div class="location-summary uppercase">
                <h3 class="uppercase size-h3 weight-bold padding-bottom-sm">XG 1st WORLD TOUR “The first HOWL”</h3>
                <div class="location-summary-body">
                    <div>
                        <h3 class="size-subtitle2 weight-bold">date</h3>
                        <p class="c-gray">2024/8/4 (SUN)</p>
                    </div>
                    <div>
                        <h3 class="size-subtitle2 weight-bold">venue</h3>
                        <p class="c-gray">UOB Live, Bangkok</p>
                    </div>
                    <div class="location-status on-sale">
                        <p class="c-white size-overline weight-bold">
                            on sale
                        </p>
                    </div>
                </div>
            </div>
            <div class="summary-buy-tickets hidden-device-md">
                <a href="#" class="button button-secondary width-full">Buy Ticket</a>
            </div>

            <div class="locations-scroll">
                <?php
                $location = array(
                    "title" => "XG 1st WORLD TOUR “The first HOWL”",
                    "date" => "2024/8/4 (SUN)",
                    "venue" => "UOB Live, Bangkok",
                    "status" => "on-sale",
                    "sale-date" => "18 May 24"
                );

                for ($i = 0; $i < 4; $i++) {
                    include($root . "include/element-location-info-card.php");
                }
                ?>
            </div>
        </div>

        <div class="ticket-info">
            <h3 class="size-h3">Ticket Information</h3>
            <div class="separator-gray-light"></div>
            <div class="info-grid">
                <div>
                    <h4 class="uppercase weight-bold padding-bottom-xs size-subtitle1">Seating</h4>
                    <table class="ticket-table">
                        <tbody>
                            <tr>
                                <td>A Reserve seating</td>
                                <td>$249.90</td>
                            </tr>
                            <tr>
                                <td>General Admission standing</td>
                                <td>$199.90</td>
                            </tr>
                            <tr>
                                <td>B Reserve seating</td>
                                <td>$199.90</td>
                            </tr>
                            <tr>
                                <td>C Reserve seating</td>
                                <td>$159.90</td>
                            </tr>
                            <tr>
                                <td>D Reserve seating</td>
                                <td>$129.90</td>
                            </tr>
                            <tr>
                                <td>Changemaker ticket</td>
                                <td>$351.85</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>ADDITIONAL TRANSACTION FEES AND CREDIT/DEBIT CARD PROCESSING FEES MAY APPLY.</p>
                </div>
                <div>
                    <h4 class="uppercase weight-bold padding-bottom-xs size-subtitle1">Age restrictions</h4>
                    <p>Licensed All Ages</p>
                </div>
                <div>
                    <h4 class="uppercase weight-bold padding-bottom-xs size-subtitle1">Ticket limits</h4>
                    <p>Per purchaser, per show</p>
                </div>
                <div>
                    <h4 class="uppercase weight-bold padding-bottom-xs size-subtitle1">Ticket suppression</h4>
                    <p>As an anti-scalping measure, ticket delivery will be suppressed until:
                        Mon 3 Feb 2025</p>
                </div>
                <div>
                    <h4 class="uppercase weight-bold padding-bottom-xs size-subtitle1">Accessibility</h4>
                    <p>For Accessible seating and/or access, call Ticketek's
                        Accessible Seating booking line: 1300 665 915 
                        This venue accepts companion cards.</p>
                </div>
                <div>
                    <h4 class="uppercase weight-bold padding-bottom-xs size-subtitle1">Set Times</h4>
                    <p>Please check back closer to the show for set times.</p>
                </div>
            </div>
            <div class="venue padding-top-sm">
                <h4 class="uppercase weight-bold size-subtitle1">Venue</h4>
                <div class="map-and-address">
                    <div class="map">
                        <img src="./assets/img/design/mock-map.png" alt="mock map">
                    </div>
                    <div class="address">
                        <h5 class="weight-bold size-subtitle1">UOB Live, Bangkok</h5>
                        <p>Floor 6, EmSphere, 622 Sukhumvit Rd, Klongton, Khlong Toei, Bangkok</p>
                        <div class="location-button">
                            <a href="#" class="button button-primary">Get Direction</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ticket-info-buy-tickets hidden-device-md">
                <a href="#" class="button button-primary width-full">Buy Ticket</a>
            </div>
        </div>
    </section>

    <section class="sc two-sides">
        <div class="sc-header">
            <div class="title">
                <h1 class="size-h1 weight-bold" data-split data-split-animate>LATEST UPDATE</h1>
            </div>
            <a href="#view-all-update" class="button button-secondary animate fadeIn hidden-device-sm">View All Update</a>
        </div>

        <div class="two-sides-content">
            <div class="left-side">
                <div class="tour-box large">
                    <div class="title-and-date">
                        <h3 class="size-h3">Macklemore announces 2nd & final Perth show plus Melbourne venue upgrade due to phenomenal ticket demand</h3>
                        <p class="size-subtitle2 uppercase">21 Nov 2023</p>
                    </div>
                    <div class="image">
                        <img src="./assets/img/design/large-tour-box-image-2.png" alt="tour-box-image">
                    </div>
                </div>
            </div>
            <div class="separator-gray-dark"></div>
            <div class="right-side">
                <div class="tour-box large">
                    <div class="title-and-date">
                        <h3 class="size-h3">Macklemore announces 2nd & final Perth show plus Melbourne venue upgrade due to phenomenal ticket demand</h3>
                        <p class="size-subtitle2 uppercase">21 Nov 2023</p>
                    </div>
                    <div class="image">
                        <img src="./assets/img/design/large-tour-box-image-3.png" alt="tour-box-image">
                    </div>
                </div>
            </div>
            <a href="#view-all-update" class="button button-secondary animate fadeIn hidden-device-md">View All Update</a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>