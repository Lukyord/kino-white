<?php
$tour_status_class = "";
$tour_status_text = "";
if ($tour["status"] == "on-sale") {
    $tour_status_class = "on-sale";
    $tour_status_text = "on sale";
} elseif ($tour["status"] == "sold-out") {
    $tour_status_class = "sold-out";
    $tour_status_text = "sold out";
} elseif ($tour["status"] == "coming-soon") {
    $tour_status_class = "coming-soon";
    $tour_status_text = "sale " . $tour["sale-date"];
}
?>

<div class="tour-card animate fadeIn">
    <a class="link-overlay" href="./tours-single.php">&nbsp;</a>
    <div class="tour-card-image">
        <img src="<?php echo $tour['card-image']; ?>" alt="tour-card-image">
        <div class="tour-status size-overline weight-bold <?php echo $tour_status_class ?>"><?php echo $tour_status_text ?></div>
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