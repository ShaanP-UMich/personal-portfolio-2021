<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<a id="projects"></a>
<div id="projects-section">
    <div class="other-sections-row">
        <p class="subsection-heading">Projects</p>
    </div>

    <div class="other-sections-row">
        <div class="projects-section-container">

            <?php
            $data = get_projects_data($projects_repeater);
            $count = 0;

            if (!empty($data)) {
                foreach ($data as $k => $f) { ?>

                    <?php if ($count % 2 == 0) { ?>
                        <div class="projects-section-row">
                            <div class="projects-section-col">
                                <p class="project-text project-name-text"><?php echo $f['title'] ?></p>
                                <p class="project-text project-desc-text"><?php echo $f['description'] ?></p>
                                <p class="project-skills-text"><?php echo $f['skills'] ?></p>
                            </div>

                            <div class="projects-section-col">
                                <?php
                                $media = '<img src="' . esc_url(get_media_url($f['img'])) . '" class="project-image">';
                                ?>
                                <?php echo $media ?>
                            </div>
                        </div>

                    <?php } else { ?>
                        <div class="projects-section-row">
                            <div class="projects-section-col flipped">
                                <?php
                                $media = '<img src="' . esc_url(get_media_url($f['img'])) . '" class="project-image">';
                                ?>
                                <?php echo $media ?>
                            </div>

                            <div class="projects-section-col">
                                <p class="project-text project-name-text"><?php echo $f['title'] ?></p>
                                <p class="project-text project-desc-text"><?php echo $f['description'] ?></p>
                                <p class="project-skills-text"><?php echo $f['skills'] ?></p>
                            </div>
                        </div>
                    <?php } ?>

                <?php
                    $count++;
                } ?>
            <?php } else { ?>
                <div>
                    <p> No projects have been uploaded</p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>