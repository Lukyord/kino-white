<div class="swiper-slide animate fadeIn delay-<?php echo ($index * 2) ?>">
    <div class="promote-show-item">
        <div class="item-text">
            <h3 class="size-h3"><?php echo $show_item["title"] ?></h3>
            <p><?php echo $show_item["description"] ?></p>
        </div>

        <?php if ($show_item["image"]) : ?>
            <div class="item-image">
                <img src="<?php echo $show_item["image"] ?>" alt="promote-show-image">
            </div>
        <?php else : ?>
            <div class="filler-image"></div>
        <?php endif ?>
    </div>
</div>