<?php
/*==========================================
    Add stylesheets and javascript files
==========================================*/
function custom_theme_scripts()
{
    //Bootstrap CSS
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    //wp_enqueue_style('bootstrap-grid', get_stylesheet_directory_uri() . '/css/bootstrap-grid.min.css');

    //Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    //Javascript Files
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/script.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');


add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts()
{
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/css/bootstrap.css");
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/css/bootstrap-responsive.css");
}

/*==========================================
    Add Featured Images
==========================================*/
add_theme_support('post-thumbnails');


/*==========================================
   Custom Header Image
==========================================*/
$custom_image_header = array(
    'width' => 2084,
    'height' => 835,
    'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);


/*==========================================
   Add Menus
==========================================*/
function register_my_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Main Menu'),
        'footer-left' => __('Left Footer Menu'),
        'footer-middle' => __('Middle Footer Menu'),
        'footer-right' => __('Right Footer Menu')
    ));
}

add_action('init', 'register_my_menus');


$right_footer_menu = wp_get_nav_menu_object("my mainmenu");


/*==========================================
   Add Background Image
==========================================*/
$custom_background_image = array(
    'default-color' => '06d6a0',
);

add_theme_support('custom-background', $custom_background_image);


/*==========================================
   Registering Advanced Custom Fields
==========================================*/
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key'       => 'home-welcome',
        'title'     => 'Welcome Section',
        'fields'    => array(
            array(
                'key'   => 'welcome-title',
                'label' => 'Title',
                'name'  => 'welcome-title',
                'type'  => 'text'
            ),

            array(
                'key'   => 'welcome-subtitle',
                'label' => 'Subtitle',
                'name'  => 'welcome-subtitle',
                'type'  => 'text'
            ),

            array(
                'key'   => 'welcome-description',
                'label' => 'Description',
                'name'  => 'welcome-description',
                'type'  => 'textarea'
            )
        ),

        'location' => array(
            array(
                array(
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'page'
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        	'key'    => 'group_61773bcdc7eef',
        	'title'  => 'Projects Tagline',
        	'fields' =>  array(

            array(
        			'key'   => 'field_61773bfc587fd',
        			'label' => 'tagline',
        			'name'  => 'tagline',
        			'type'  => 'text',

        			'instructions'      => '',
        			'required'          => 0,
        			'conditional_logic' => 0,
        			'wrapper'           => array(
        				'width'           => '',
        				'class'           => '',
        				'id'              => '',
        			),
        			'default_value'    => '',
        			 'placeholder'     => 'We are unified behind the belief that mental health matters. Our vision is a world that prioritizes mental health for everyone.',
        			'prepend'          => '',
        			'append'           => '',
        			'maxlength'        => '',
        		),
        	),
        	'location'        => array(
        		array(
        			array(
        				'param'    => 'page_template',
        				'operator' => '==',
        				'value'    => 'projects-page.php',
        			),
        		),
        	),
        	'menu_order'   => 0,
        	'position'     => 'normal',
        	'style'        => 'default',
        	'label_placement'       => 'top',
        	'instruction_placement' => 'label',
        	'hide_on_screen'        => '',
        	'active'                => true,
        	'description'           => '',
    ));



    acf_add_local_field_group(array(
    	'key' => 'group_617746685daab',
    	'title' => 'Projects',
    	'fields' => array(
    		array(
    			'key' => 'field_617746748f06d',
    			'label' => 'project page title',
    			'name' => 'project_page_title',
    			'type' => 'text',
    			'instructions' => '',
    			'required' => 0,
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
    	),
    	'location' => array(
    		array(
    			array(
    				'param' => 'page_template',
    				'operator' => '==',
    				'value' => 'projects-page.php',
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
    ));


    acf_add_local_field_group(array(
        'key'       => 'ourwork-project',
        'title'     => 'Project Info',
        'fields'    => array(
            array(
                'key'   => 'project-title',
                'label' => 'Title',
                'name'  => 'project-title',
                'type'  => 'text'
            ),

            array(
                'key'   => 'project-subtitle',
                'label' => 'Subtitle',
                'name'  => 'project-subtitle',
                'type'  => 'text'
            ),

            array(
                'key'   => 'project-excerpt',
                'label' => 'Excerpt',
                'name'  => 'project-excerpt',
                'type'  => 'textarea'
            ),

            array(
                'key'   => 'project-content',
                'label' => 'Main Content',
                'name'  => 'project-content',
                'type'  => 'wysiwyg'
            )
        ),

        'location' => array(
            array(
                array(
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'post'
                ),
            ),
        ),
    ));


}


/*==========================================
   Footer Logo
==========================================*/
add_theme_support('title-tag');
add_theme_support('custom-logo', array(
    'height' => 458,
    'width'  => 1224,
));
