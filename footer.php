<!-- If you have html on the footer of each page put it here -->
<?php
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="footer">
    <div>
        <p class="email">Contact me at</p>
        <p class="email"><a href="mailto: shaanp@umich.edu">shaanp@umich.edu</a></p>
    </div>

    <div class="footer-images">
        <a href="mailto: shaanp@umich.edu">
            <?php if (get_theme_mod($footer_icon1)) { ?>
                <img src="<?php echo get_theme_mod($footer_icon1) ?>" class="footer-image" alt="">
            <?php } ?>
            <!-- <img src="images/footer icons/facebook.png" class="footer-image"> -->
        </a>
        <a href="https://www.facebook.com">
            <?php if (get_theme_mod($footer_icon2)) { ?>
                <img src="<?php echo get_theme_mod($footer_icon2) ?>" class="footer-image" alt="">
            <?php } ?>
            <!-- <img src="images/footer icons/email.png" class="footer-image"> -->
        </a>
        <a href="https://open.spotify.com/user/pieface3450?si=66e2b18e9ea24ff9">
            <?php if (get_theme_mod($footer_icon3)) { ?>
                <img src="<?php echo get_theme_mod($footer_icon3) ?>" class="footer-image" alt="">
            <?php } ?>
            <!-- <img src="images/footer icons/spotify.png" class="footer-image"> -->
        </a>
    </div>
</div>

</div>

<?php wp_footer(); ?>

</body>

</html>