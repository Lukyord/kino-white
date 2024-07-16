<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="papers-main">
    <section class="sc two-sides dark-gradient-bg">
        <div class="sc-header padding-top-md">
            <div class="title">
                <h1 class="size-h1 weight-bold" data-split data-split-animate>PAPERS</h1>
            </div>
        </div>

        <div class="two-sides-content gap">
            <?php
            $box = array(
                "link" => "./papers-single.php",
                "title" => "Macklemore announces 2nd & final Perth show plus Melbourne venue upgrade due to phenomenal ticket demand",
                "date" => "21 Nov 2023",
                "image" => "./assets/img/design/large-tour-box-image-1.png",
                "extra_class" => "large"
            );
            include($root . "include/element-black-box.php")
            ?>
            <?php
            for ($i = 0; $i < 9; $i++) {
                $box = array(
                    "link" => "./papers-single.php",
                    "title" => "Ateez World Tour [The Fellowship : Break The Wall] In Singapore 2023",
                    "date" => "21 Nov 2023",
                    "image" => "./assets/img/design/tour-box-image-1.png",
                    "extra_class" => ""
                );
                include($root . "include/element-black-box.php");
            }
            ?>
        </div>

        <div class="papers-button">
            <a href="javascript:;" class="button button-primary">load more</a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>