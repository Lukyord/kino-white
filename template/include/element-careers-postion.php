<div class="position uppercase animate fadeIn">
    <div class="title">
        <div class="type margin-bottom-xs">
            <p class="c-white weight-bold">full time</p>
        </div>
        <h3 class="size-h3 weight-bold">Event Coordinator (<?php echo $i ?>)</h3>
    </div>

    <div class="position-info">
        <div class="position-info-item">
            <h4 class="size-subtitle2 weight-bold padding-bottom-2xs">Category</h4>
            <p class="c-gray size-subtitle2">Operation</p>
        </div>
        <div class="position-info-item">
            <h4 class="size-subtitle2 weight-bold padding-bottom-2xs">Education</h4>
            <p class="c-gray size-subtitle2">University Degree or above</p>
        </div>
        <div class="position-info-item">
            <h4 class="size-subtitle2 weight-bold padding-bottom-2xs">Location</h4>
            <p class="c-gray size-subtitle2">Bangkok, Thailand</p>
        </div>
    </div>

    <?php
    $button_class = "button ";
    if (in_array($page, ["careers.php"])) {
        $button_class .= "button-primary";
    } elseif (in_array($page, ["careers-single.php"])) {
        $button_class .= "button-secondary";
    } else {
        $button_class .= "button-primary";
    }
    ?>
    <a href="<?php echo $root; ?>careers-single.php" class="<?php echo $button_class; ?>">View Detail</a>
</div>