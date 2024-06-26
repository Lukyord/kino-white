<div class="swiper-slide">
    <div class="band-slide">
        <a class="link-overlay" href="./tours-single.php">&nbsp;</a>
        <div class="band-bg">
            <figure class="object-fit">
                <?php
                if (preg_match("/\.(mp4)$/", $hero_slide["bg"])) { ?>
                    <video playsinline autoplay muted loop src="" class="vdojs" data-vdo-src="<?php echo $hero_slide["bg"] ?>" data-vdo-srcset="<?php echo $hero_slide["bg"] ?>" poster=""></video>
                <?php } else { ?>
                    <img src="<?php echo $hero_slide["bg"] ?>" alt="band background">
                <?php } ?>
            </figure>
        </div>
        <div class="band-image">
            <img src="<?php echo $hero_slide["band-image"] ?>" alt="band Image">

            <div class="band-logo">
                <img src="<?php echo $hero_slide["band-logo"] ?>" alt="band Image">
            </div>

        </div>
    </div>
</div>