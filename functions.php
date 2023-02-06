<?php 

function devdaryl_files() {
     // Loading Styles
    wp_enqueue_style('devdaryl_google_fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Rubik+Wet+Paint&display=swap');
    wp_enqueue_style('devdaryl_reset_styles', get_theme_file_uri('/vendors/normalize.css'));
    wp_enqueue_style('devdaryl_main_styles', get_theme_file_uri('/build/main.css'));
    wp_enqueue_style('devdaryl_styles_css', get_stylesheet_directory_uri().'/style.css', array('devdaryl_main_styles'), '1.0');

    // Loading Scripts
    wp_enqueue_script('devdaryl_font_awesome', '//kit.fontawesome.com/664f415367.js');
    wp_enqueue_script('devdaryl_particles_json', get_theme_file_uri('/vendors/particles.json'));
    wp_enqueue_script('devdaryl_particles_js', '//cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js', array('devdaryl_particles_json'), '2.0.0', true);
    wp_enqueue_script('devdaryl_main_js', get_theme_file_uri('/build/main.js'), array('devdaryl_particles_js'), '1.0', true);

    // Localize script path so we can access it using js
    $vendors_uri = array('templateUrl' => get_stylesheet_directory_uri());
    wp_localize_script('devdaryl_particles_json', 'particlesJson', $vendors_uri);
}

add_action('wp_enqueue_scripts', 'devdaryl_files');


function devdaryl_features() {
    // register_nav_menu('topLevelMenu', 'Top Level Menu');
    add_theme_support('title-tag');
    // adds a featured image feature
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'devdaryl_features');

// registers sidebars
function devdaryl_widgets() {
    register_sidebar( array(
        'name'          => __( 'Recent Posts Sidebar', 'devdaryl' ),
        'id'            => 'recentposts',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget__recentpost">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Posts Categories Sidebar', 'devdaryl' ),
        'id'            => 'postcategories',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget__postcategory">',
        'after_title'   => '</h3>',
    ) );
}

add_action('widgets_init', 'devdaryl_widgets');


function devdaryl_acf_add_local_field_groups() {
	
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_62968016c6308',
            'title' => 'Project',
            'fields' => array(
                array(
                    'key' => 'field_629680717da08',
                    'label' => 'Project Image One',
                    'name' => 'project_image_one',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => 'field_6296811e7da09',
                    'label' => 'Project Image Two',
                    'name' => 'project_image_two',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => 'field_6296813f7da0a',
                    'label' => 'Project Image Three',
                    'name' => 'project_image_three',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => 'field_6296815f7da0b',
                    'label' => 'Project Client',
                    'name' => 'project_client',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => 'Enter Project Client	i.e FDOT',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_629690027da0c',
                    'label' => 'Project Skills',
                    'name' => 'project_skills',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_629691897da0e',
                    'label' => 'Project Code Link',
                    'name' => 'project_code_link',
                    'type' => 'url',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => 'https://github.com/darmag12?tab=repositories',
                ),
                array(
                    'key' => 'field_6296921f7da0f',
                    'label' => 'Project Live Link',
                    'name' => 'project_live_link',
                    'type' => 'url',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'https://example.com',
                    'placeholder' => 'https://example.com',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'project',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 1,
        ));
        
    endif;		
	
}

add_action('acf/init', 'devdaryl_acf_add_local_field_groups');