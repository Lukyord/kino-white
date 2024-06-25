<div class="tour-card animate fadeIn">
    <a class="link-overlay" href="./tours-single.php">&nbsp;</a>
    <div class="tour-card-image">
        <img src="<?php echo $tour['card-image']; ?>" alt="tour-card-image">
        <div class="tour-sale-date sale-date size-overline weight-bold">sale <?php echo $tour["sale-date"] ?></div>
    </div>
    <div class="tour-card-content">
        <div class="content-header">
            <h3 class="size-h3 weight-bold"><?php echo $tour['title']; ?></h3>
            <p class="size-subtitle c-gray margin-top-3xs"><?php echo $tour['description']; ?></p>
        </div>
        <div class="content-body">
            <p class="size-subtitles2 weight-bold"><?php echo $tour['tour']; ?></p>
            <p class="size-subtitles2 c-gray margin-top-3xs"><?php echo implode("/ ", $tour['location']); ?></p>
        </div>
    </div>
</div>