<!-- If you have a navbar or html on the top of every page put it here -->
<?php wp_head();
require get_template_directory() . '/inc/section_vars.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shaan's 2021 Portfolio</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="<?php echo home_url(); ?>" class="logo">
                <?php if (get_theme_mod($navbar_icon)) { ?>
                    <img src="<?php echo get_theme_mod($navbar_icon) ?>" class="logo-image" alt="">
                <?php } ?>
                <!-- <img src="images/Invent Animate Icon_100x100.jpg" class="logo-image"> -->
                <?php if (get_theme_mod($navbar_name)) { ?>
                    <p class="logo-text">
                        <?php echo get_theme_mod($navbar_name) ?>
                    </p>
                <?php } ?>
                <!-- <p class="logo-text">Shaan Parikh</p> -->
            </a>

            <?php
            wp_nav_menu($args = array(
                'menu_class'        => "nav-links", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container_id'      => "menu", // (string) The ID that is applied to the container.
                'theme_location'    => "top_nav", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'menu_id'           => "menu-primary", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
            ));
            ?>

        </div>