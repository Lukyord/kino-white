<div class="live-agency-card-image">
    <img src="<?php echo $live_agency["image"] ?>" alt="live agency image">
</div>
<div class="live-agency-card-content c-white uppercase">
    <h2 class="size-h1 weight-bold"><?php echo $live_agency["name"] ?></h2>
    <div class="live-agency-card-content-body">
        <div class="territory-and-service size-subtitle2 padding-top-lg padding-bottom-md">
            <div class="territory">
                <h3 class="weight-bold">Territory</h3>
                <p><?php echo $live_agency["territory"] ?></p>
            </div>
            <div class="service">
                <h3 class="weight-bold">Service</h3>
                <p><?php echo implode(", ", $live_agency['service']); ?></p>
            </div>
        </div>
        <div class="misc">
            <div>
                <p class="tag size-overline weight-bold c-black"><?php echo $live_agency["tag"] ?></p>
            </div>
            <div class="social-media white">
                <a href="#outer"><i class="ic ic-facebook size-icon-lg"></i></a>
                <a href="#outer"><i class="ic ic-instagram size-icon-lg"></i></a>
                <a href="#outer"><i class="ic ic-twitter size-icon-lg"></i></a>
                <a href="#outer"><i class="ic ic-youtube size-icon-lg"></i></a>
            </div>
        </div>
    </div>
</div>