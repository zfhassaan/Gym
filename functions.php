<?php

/*
    Adding CSS and Javascript to theme

    gym_setup(){     }
*/

function gym_setup(){
    wp_enqueue_style('bootstrap',get_theme_file_uri('/assets/css/bootstrap.css'),NULL,microtime());
    wp_enqueue_style('owl-carousel',get_theme_file_uri('/assets/css/owl.carousel.min.css'),NULL,microtime());
    wp_enqueue_style('magnific-popup',get_theme_file_uri('/assets/css/magnific-popup.css'),NULL,microtime());
    wp_enqueue_style('font-awesome',get_theme_file_uri('/assets/css/font-awesome.min.css'),NULL,microtime());
    wp_enqueue_style('font-awesomecss',get_theme_file_uri('/assets/css/font-awesome.css'),NULL,microtime());
    wp_enqueue_style('themify-icons',get_theme_file_uri('/assets/css/themify-icons.css'),NULL,microtime());
    wp_enqueue_style('gijgo',get_theme_file_uri('/assets/css/gijgo.css'),NULL,microtime());
    wp_enqueue_style('nice-select',get_theme_file_uri('/assets/css/nice-select.css'),NULL,microtime());
    wp_enqueue_style('flaticon.css',get_theme_file_uri('/assets/css/flaticon.css'),NULL,microtime());
    wp_enqueue_style('slicknav.css',get_theme_file_uri('/assets/css/slicknav.css'),NULL,microtime());
    // Add Style.css in our theme support. The get_stylesheet_uri only works with
    // style.css
    wp_enqueue_style('style',get_stylesheet_uri(),NULL,microtime());

    // Adding Javascript
    wp_enqueue_script('modrnizer',get_theme_file_uri('/assets/js/modernizer.min.js',NULL,microtime(),true));
    wp_enqueue_script('jquery-1.12.4',get_theme_file_uri('/assets/js/jquery-1.12.4.min.js',NULL,microtime(),true));
    wp_enqueue_script('popper',get_theme_file_uri('/assets/js/popper.min.js',NULL,microtime(),true));
    wp_enqueue_script('bootstrap',get_theme_file_uri('/assets/js/bootstrap.min.js',NULL,microtime(), true));
    wp_enqueue_script('owl.carousel',get_theme_file_uri('/assets/js/owl.carousel.min.js',NULL,microtime(),true));
    wp_enqueue_script('isotope.pkgd',get_theme_file_uri('/assets/js/isotope.pkgd.min.js',NULL,microtime(),true));
    wp_enqueue_script('ajax-form',get_theme_file_uri('/assets/js/ajax-form.js',NULL,microtime(),true));
    wp_enqueue_script('waypoints.min.js',get_theme_file_uri('/assets/js/waypoints.min.js',NULL,microtime(),true));
    wp_enqueue_script('jquery-counterup',get_theme_file_uri('/assets/js/jquery-counterup.min.js',NULL,microtime(),true));
    wp_enqueue_script('imagesloaded.pkgd.min.js',get_theme_file_uri('/assets/js/imagesloaded.pkgd.min.js',NULL,microtime(),true));
    wp_enqueue_script('scrollIt',get_theme_file_uri('/assets/js/scrollIt.js',NULL,microtime(),true));
    wp_enqueue_script('jquery.scrollUp.min.js',get_theme_file_uri('/assets/js/jquery.scrollUp.min.js',NULL,microtime(),true));
    wp_enqueue_script('wow.min.js',get_theme_file_uri('/assets/js/wow.min.js',NULL,microtime(),true));
    wp_enqueue_script('gijgo.min.js',get_theme_file_uri('/assets/js/gijgo.min.js',NULL,microtime(),true));
    wp_enqueue_script('nice-select',get_theme_file_uri('/assets/js/nice-select.min.js',NULL,microtime(),true));
    wp_enqueue_script('jquery.slicknav.min.js',get_theme_file_uri('/assets/js/jquery.slicknav.min.js',NULL,microtime(),true));
    wp_enqueue_script('jquery.magnific-popup.min.js',get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js',NULL,microtime(),true));
    wp_enqueue_script('plugins.js',get_theme_file_uri('/assets/js/plugins.js',NULL,microtime(),true));
    wp_enqueue_script('contact.js',get_theme_file_uri('/assets/js/contact.js',NULL,microtime(),true));
    wp_enqueue_script('jquery.ajaxchimp.min.js',get_theme_file_uri('/assets/js/jquery.ajaxchimp.min.js',NULL,microtime(),true));
    wp_enqueue_script('jquery.form',get_theme_file_uri('/assets/js/jquery.form.',NULL,microtime(),true));
    wp_enqueue_script('jquery.validate',get_theme_file_uri('/assets/js/jquery.validate.min.js',NULL,microtime(),true));
    wp_enqueue_script('mail-script',get_theme_file_uri('/assets/js/mail-script.js',NULL,microtime(),true));
    wp_enqueue_script('main',get_theme_file_uri('/assets/js/main.js',NULL,microtime(),true));

    // This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);
}
add_action('wp_enqueue_scripts','gym_setup');


/*
    Add theme functionalities.
*/

function gym_init(){
    // Add Featured Images support in Theme
    add_theme_support('post-thumbnails');
    // Add title tag in our theme. 
    add_theme_support('title-tag');
    // add html5 support
    add_theme_support('html5',[
        'comment-list','comment-form','search-form'
    ]);
}
add_action('after_setup_theme','gym_init');

/*
    Custom Post Types Support

*/

function gym_custom_post_type(){
    register_post_type('project',
    array(
        'rewrite' =>array('slug'=>'projects'),
        'labels' => array('name' => 'Projects',
        'singular_name' => 'Project',
        'add_new_item' => 'Add New Item',
        'edit_item' => 'Edit Project'),
        'menu_icon' => 'dashicons-images-alt',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail', 'editor', 'excerpt', 'comments'
        )
    )
    );

    register_post_type('equipment',
    array(
        'rewrite' =>array('slug'=>'equipments'),
        'labels' => array('name' => 'Equipments',
        'singular_name' => 'Equipment',
        'add_new_item' => 'Add New Item',
        'edit_item' => 'Edit Equipment'),
        'menu_icon' => 'dashicons-admin-tools',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail', 'editor', 'excerpt', 'comments'
        )
    )
    );
}
add_action('init','gym_custom_post_type');

/*
    Custom Logo Function
*/
function gym_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'gym_custom_logo_setup' );


    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style-editor.css' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


