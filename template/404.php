<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="error-main">
    <section class="sc error">
        <div class="error-content c-white">
            <h1 class="size-h1 weight-bold uppercase animate fadeIn">sorry, page not found</h1>
            <p class="animate fadeIn">The page you are looking for might be deleted or wrong URL.
                Please try again or return to homepage.
            </p>
            <a href="<?php echo $root; ?>index.php" class="button button-secondary animate fadeIn">Home</a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>