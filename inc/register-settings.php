<?php

function register_primary_menu()
{
  register_nav_menus(
    array(
      'top_nav' => __('Top Nav Menu'),
      'bottom_nav' => __('Bottom Nav Menu')
    )
  );
}
add_action('after_setup_theme', 'register_primary_menu');

/*
*
* Walker for the main menu 
*
*/
function add_arrow($output, $item, $depth, $args)
{
  //Only add class to 'top level' items on the 'primary' menu.
  if ('primary' == $args->theme_location && $depth === 0) {
    if (in_array("menu-item-has-children", $item->classes)) {
      $new_output = '<div class="sub-wrap">' .
        $output .
        '<i class="nav-icon fas fa-chevron-down down-icon" aria-hidden="true"></i></div>';
      return $new_output;
    }
  }
  return $output;
}
add_filter('walker_nav_menu_start_el', 'add_arrow', 10, 4);

// Example of how to use a repeatable box

// function example_repeatable_customizer($wp_customize) {
//   require 'section_vars.php';  
//   require_once 'controller.php';  

//   $wp_customize->add_section($example_section, array(
//     'title' => 'Example Repeaters',
//   ));

//   $wp_customize->add_setting(
//     $example_repeater,
//     array(
//         'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
//         'transport' => 'refresh',
//     ) );

//   $wp_customize->add_control(
//       new Onepress_Customize_Repeatable_Control(
//           $wp_customize,
//           $example_repeater,
//           array(
//               'label' 		=> esc_html__('Example Q & A Repeater'),
//               'description'   => '',
//               'section'       => $example_section,
//               'live_title_id' => 'some_quote',
//               'title_format'  => esc_html__('[live_title]'), // [live_title]
//               'max_item'      => 10, // Maximum item can add
//               'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
//               'fields'    => array(
//                   'some_quote'  => array(
//                       'title' => esc_html__('Text'),
//                       'type'  =>'text',
//                   ),
//                   'some_image' => array(
//                     'title' => esc_html__('Image'),
//                     'type'  =>'media',
//                 ),
//               ),
//           )
//       )
//   );
// }
// add_action( 'customize_register', 'example_repeatable_customizer' );

// function old_home_customizer($wp_customize)
// {
//   require 'section_vars.php';
//   $wp_customize->add_section($home_section, array(
//     'title' => 'Home',
//   ));

//   // $wp_customize->add_setting($home_top_vid, array(
//   //   'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
//   //   'sanitize_callback' => 'sanitize_text_field',
//   // ));

//   // $wp_customize->add_control($home_top_vid, array(
//   //   'label' => 'Top Video Embed',
//   //   'section' => $home_section,
//   // ));

//   $wp_customize->add_setting($home_top_img);
//   $wp_customize->add_control(new WP_Customize_Image_Control(
//     $wp_customize,
//     $home_top_img,
//     array(
//       'label' => 'Top Image',
//       'section' => $home_section
//     )
//   ));
//   // Top Desc
//   $wp_customize->add_setting($home_top_desc);
//   $wp_customize->add_control($home_top_desc, array(
//     'label' => 'Top Description',
//     'section' => $home_section,
//     'type' => 'textarea'
//   ));
// }
// add_action('customize_register', 'old_home_customizer');

function navbar_customizer($wp_customize)
{
  require 'section_vars.php';
  $wp_customize->add_section($navbar_section, array(
    'title' => 'Navbar',
  ));

  $wp_customize->add_setting($navbar_icon);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $navbar_icon,
    array(
      'label' => 'Navbar Icon',
      'section' => $navbar_section
    )
  ));

  $wp_customize->add_setting($navbar_name);
  $wp_customize->add_control($navbar_name, array(
    'label' => 'Navbar Name',
    'section' => $navbar_section,
    'type' => 'textarea'
  ));
}
add_action('customize_register', 'navbar_customizer');

function home_customizer($wp_customize)
{
  require 'section_vars.php';
  $wp_customize->add_section($home_section, array(
    'title' => 'Home Page',
  ));

  $wp_customize->add_setting($home_greeting);
  $wp_customize->add_control($home_greeting, array(
    'label' => 'Greeting',
    'section' => $home_section,
    'type' => 'textarea'
  ));

  $wp_customize->add_setting($home_hero);
  $wp_customize->add_control($home_hero, array(
    'label' => 'Hero',
    'section' => $home_section,
    'type' => 'textarea'
  ));

  $wp_customize->add_setting($home_myself);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $home_myself,
    array(
      'label' => 'Myself Picture',
      'section' => $home_section
    )
  ));

  $wp_customize->add_setting($home_bio);
  $wp_customize->add_control($home_bio, array(
    'label' => 'Bio',
    'section' => $home_section,
    'type' => 'textarea'
  ));
}
add_action('customize_register', 'home_customizer');

// Projects page customizer
function projects_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($projects_section, array(

    // This is the name of the section that will visually display in 
    // the admin panel
    'title' => 'Projects',
  ));

  $wp_customize->add_setting(
    $projects_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $projects_repeater,
      array(
        'label'     => esc_html__('Update List of Projects'),
        'description'   => 'Add or remove projects from the projects page and add a title and description.',
        'section'       => $projects_section,
        'live_title_id' => 'title',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 20, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'title'  => array(
            'title' => esc_html__('Project Title'),
            'type'  => 'text',
          ),
          'description'  => array(
            'title' => esc_html__('Project Description'),
            'type'  => 'text',
          ),
          'skills'  => array(
            'title' => esc_html__('Project Skills'),
            'type'  => 'text',
          ),
          'img'  => array(
            'title' => esc_html__('Project Img'),
            'type'  => 'media',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'projects_repeatable_customizer');
