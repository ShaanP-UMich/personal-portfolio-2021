<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="hero-section-row">
  <div class="hero-section-col">
    <!-- <p class="greeting-text">My name is Shaan and</p> -->
    <?php if (get_theme_mod($home_greeting)) { ?>
      <p class="greeting-text">
        <?php echo get_theme_mod($home_greeting) ?>
      </p>
    <?php } ?>
    <!-- <p class="hero-text">I am an aspiring Computer Scientist</p> -->
    <?php if (get_theme_mod($home_hero)) { ?>
      <p class="hero-text">
        <?php echo get_theme_mod($home_hero) ?>
      </p>
    <?php } ?>
  </div>
  <!-- <img src="images/Myself.jpg" class="myself-image"> -->
  <?php if (get_theme_mod($home_myself)) { ?>
    <img src="<?php echo get_theme_mod($home_myself) ?>" class="myself-image" alt="">
  <?php } ?>
</div>

<a id="about"></a>
<div id="bio-section">
  <div class="other-sections-row">
    <div class="bio-section-col">
      <p class="subsection-heading">About</p>
      <?php if (get_theme_mod($home_bio)) { ?>
        <p class="bio-text">
          <?php echo get_theme_mod($home_bio) ?>
        </p>
      <?php } ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>