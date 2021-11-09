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
      <p class="bio-text">Hello! My name is Shaan and I am a first year
        student attending the
        University of Michigan. My goal is to graduate with a degree in
        Computer Science.
      </p>
      <br>
      <p class="bio-text">I have been very interested in technology since
        I was young and started
        coding when I was in middle school. Since then, I have become familar
        with Java, HTML,
        JavaScript, C#, and C++. I am also familar with the Unity and
        GameMaker Studio game engines.
      </p>
    </div>
  </div>
</div>

<a id="projects"></a>
<div id="projects-section">
  <div class="other-sections-row">
    <p class="subsection-heading">Projects</p>
  </div>

  <div class="other-sections-row">
    <div class="projects-section-container">
      <!-- Project 1-->
      <div class="projects-section-row">
        <div class="projects-section-col">
          <p class="project-text project-name-text">Resize.exe</p>
          <p class="project-text project-desc-text">
            Image resizing made simple with an easy-to-use command
            line
            interface.
          </p>
          <p class="project-skills-text">Skills Used: C++</p>
        </div>

        <div class="projects-section-col">
          <img src="images/Project Thumbnails/resize.png" class="project-image">
        </div>
      </div>

      <!-- Project 2 -->
      <div class="projects-section-row">
        <div class="projects-section-col flipped">
          <img src="images/Project Thumbnails/euchre.png" class="project-image">
        </div>

        <div class="projects-section-col">
          <p class="project-text project-name-text">Euchre</p>
          <p class="project-text project-desc-text">
            A remake of a classic card game using the C++ terminal.
          </p>
          <p class="project-skills-text">Skills: C++</p>
        </div>
      </div>

      <!-- Project 3-->
      <div class="projects-section-row">
        <div class="projects-section-col">
          <p class="project-text project-name-text"><a href="https://github.com/MrPieGaming/MrPie-Discord-Bot/tree/master" class="project-text project-name-text">
              Discord Bot</a></p>
          <p class="project-text project-desc-text">
            An interactable chat bot invoked using various
            commands.
          </p>
          <p class="project-skills-text">Skills: Java, JDA (Java
            Discord API)</p>
        </div>

        <div class="projects-section-col">
          <img src="images/Project Thumbnails/MrPieBot.png" class="project-image">
        </div>
      </div>

    </div>
  </div>
</div>

<a id="contact"></a>
<footer class="footer">
  <div class="contact-form">
    <script>
      (function(t, e, s, n) {
        var o, a, c;
        t.SMCX = t.SMCX || [], e.getElementById(n) || (o = e.getElementsByTagName(s), a = o[o.length - 1], c = e.createElement(s), c.type = "text/javascript", c.async = !0, c.id = n, c.src = "https://widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgd62Bmw17OPjwaMCidKjBap_2FcwC2TP0GO9wXQaMFSu5JU.js", a.parentNode.insertBefore(c, a))
      })(window, document, "script", "smcx-sdk");
    </script>
    <a style="font: 12px Helvetica, sans-serif; color: #999; text-decoration: none;" href=www.surveymonkey.com></a>

  </div>
  <div>
    <p class="email">Contact me at</p>
    <p class="email"><a href="mailto: shaanp@umich.edu">shaanp@umich.edu</a></p>
  </div>

  <div class="footer-images">
    <a href="">
      <img src="images/footer icons/facebook.png" class="footer-image">
    </a>
    <a href="">
      <img src="images/footer icons/email.png" class="footer-image">
    </a>
    <a href="">
      <img src="images/footer icons/spotify.png" class="footer-image">
    </a>
  </div>
</footer>

<?php get_footer(); ?>