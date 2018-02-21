<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */
function case_studies() {
	$labels = array(
	'name' => 'Case Studies',
         'singular_name' => 'Case',
         'add_new' => 'Add New',
         'add_new_item' => 'Add New Case',
         'edit_item' => 'Edit Case',
         'new_item' => 'New Case',
         'view_item' => 'View Case',
         'search_items' => 'Search Case',
         'not_found' => 'No case found',
         'not_found_in_trash' => 'No case found in Trash',
         'parent_item_colon' => '',
     );
     $args = array(
		'label' => __('case'),
		'labels' => $labels, // from array above
		'public' => true,
		'can_export' => true,
		'show_ui' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-welcome-add-page', // from this list
		'hierarchical' => false,
		'rewrite' => array( "slug" => "case" ), // defines URL base 'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'), 'show_in_nav_menus' => true,
		'taxonomies' => array( 'case_category', 'post_tag')// own categories
		);
	register_post_type('case-studies', $args);// used as internal identifier
}

add_action('init','case_studies'); 


function skills() {
	$labels = array(
	'name' => 'skills',
         'singular_name' => 'skills',
         'add_new' => 'Add New',
         'add_new_item' => 'Add New Skill',
         'edit_item' => 'Edit Skill',
         'new_item' => 'New Skill',
         'view_item' => 'View Skill',
         'search_items' => 'Search Skill',
         'not_found' => 'No Skill found',
         'not_found_in_trash' => 'No skill found in Trash',
         'parent_item_colon' => '',
     );
     $args = array(
		'label' => __('case'),
		'labels' => $labels, // from array above
		'public' => true,
		'can_export' => true,
		'show_ui' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-welcome-add-page', // from this list
		'hierarchical' => false,
		'rewrite' => array( "slug" => "skill" ), // defines URL base 'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'), 'show_in_nav_menus' => true,
		'taxonomies' => array( 'skill_category', 'post_tag')// own categories
		);
	register_post_type('skills', $args);// used as internal identifier
}

add_action('init','skills'); 

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';
