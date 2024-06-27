<?php
$location_status_class = "";
$location_status_text = "";
if ($location["status"] == "on-sale") {
    $location_status_class = "on-sale";
    $location_status_text = "on sale";
} elseif ($location["status"] == "sold-out") {
    $location_status_class = "sold-out";
    $location_status_text = "sold out";
} elseif ($location["status"] == "coming-soon") {
    $location_status_class = "coming-soon";
    $location_status_text = "sale " . $location["sale-date"];
}
?>

<div class="location fadeIn animate uppercase">
    <h3 class="uppercase size-h3 weight-bold padding-bottom-sm"><?php echo $location["title"]; ?></h3>
    <div class="location-body">
        <div>
            <h3 class="size-subtitle2 weight-bold">date</h3>
            <p class="c-gray"><?php echo $location["date"] ?></p>
        </div>
        <div>
            <h3 class="size-subtitle2 weight-bold">venue</h3>
            <p class="c-gray"><?php echo $location["venue"] ?></p>
        </div>
        <div class="location-status <?php echo $location_status_class ?>">
            <p class="c-white size-overline weight-bold"><?php echo $location_status_text ?></p>
        </div>
        <div class="location-button">
            <a href="javascript;:" class="button button-primary <?php echo ($location["status"] == "sold-out" || $location["status"] == "coming-soon") ? "disabled" : "" ?>">
                buy tickets
            </a>
        </div>
    </div>
</div>