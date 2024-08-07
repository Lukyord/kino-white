<?php if ($page != '404.php') { ?>
    <footer id="footer">
        <div class="sc footer-nav">
            <div class="footer-content">
                <div class="company">
                    <div class="logo">
                        <div class="logo-image">
                            <img src="./assets//img/logo-square-white.png" alt="">
                        </div>
                        <h2 class="size-h2 weight-bold uppercase nowrap">An enchanted<br />performance creator</h2>
                    </div>
                    <p class="c-gray">We are more than just event organizers; we're architects of unforgettable experiences. With a passion for precision and an eye for creativity, we specialize in curating sensational concerts and flawlessly executed events.</p>
                </div>
                <div class="locations">
                    <address class="location">
                        <h3 class="uppercase size-h3 weight-bold padding-bottom-sm">Bangkok</h3>
                        <p>Kino White Company Limited</p>
                        <p class="c-gray">4 Narathiwas Rachanakarin rd., Yannawa, Sathorn, Bangkok,Thailand 10120</p>
                    </address>
                    <address class="location">
                        <h3 class="uppercase size-h3 weight-bold padding-bottom-sm">Seoul</h3>
                        <p>Kino White Company Limited</p>
                        <p class="c-gray">4 Narathiwas Rachanakarin rd., Yannawa, Sathorn, Bangkok,Thailand 10120</p>
                    </address>
                </div>
            </div>
            <div class="footer-links">
                <div class="socials-and-email">
                    <a href="#mail" class="size-h3">INFO@KINOWHITE.COM</a>
                    <div class="socials">
                        <a href="#outer"><i class="ic ic-facebook size-icon-lg"></i></a>
                        <a href="#outer"><i class="ic ic-instagram size-icon-lg"></i></a>
                        <a href="#outer"><i class="ic ic-twitter size-icon-lg"></i></a>
                        <a href="#outer"><i class="ic ic-youtube size-icon-lg"></i></a>
                    </div>
                </div>
                <div class="links size-subtitle2 weight-bold uppercase">
                    <div>
                        <a href="<?php echo $root; ?>business.php">Business</a>
                        <a href="<?php echo $root; ?>service.php">Services</a>
                        <a href="<?php echo $root; ?>papers.php">Papers</a>
                        <a href="<?php echo $root; ?>careers.php">Careers</a>
                        <a href="<?php echo $root; ?>contact.php">Contact Us</a>
                    </div>
                    <div>
                        <p>©2024 Kino white</p>
                        <a href="<?php echo $root; ?>page.php">Privacy</a>
                        <a href="<?php echo $root; ?>page.php">Terms</a>
                        <a href="#outer">Web ::*</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php } ?>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php if ($page_index) {
    include($root . "include/_wp-code/wp-cookie-law-info-bar.php");
}
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>




<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/page-index.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/tours.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/tours-single.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/live-agency.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/careers.js?v=<?php echo time(); ?>"></script>


</body>

</html>